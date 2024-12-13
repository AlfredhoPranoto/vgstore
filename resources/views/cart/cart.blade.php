<x-app-layout>
    @slot('title', 'Cart')
    <x-slot name="header">
        Cart
    </x-slot>

    <x-content-layout>
        @if (session()->has('error'))
            <div class="alert alert-danger me-auto w-25 d-block alert-dismissable fade show d-flex justify-content-between">
                {{ session()->get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h4 class="mb-3 text-white">Cart Summary</h4>
        <div class="row border border-2 justify-content-center">
            @if (empty($cart) || count($cart) == 0)
                <h5 class="text-white m-0 p-3 text-center">No Product in Cart</h5>
            @else
                @foreach ($cart as $item)
                    <div class="row border-2 border-bottom py-4 px-3 bg-light-subtle">
                        <div class="col-md-2 justify-content-center d-flex">
                            <img width="120px" src=" {{ asset('img/released/' . $item->products->ver_image) }}" alt="">
                        </div>

                        <div class="col-md-10">
                            <div class="d-flex justify-content-end">
                                <button data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}"
                                    type="button" class="btn btn-danger"><i class="bi bi-trash fs-5"></i>
                                </button>
                                <x-delete-modal route="{{ route('cart.destroy', $item->id) }}" :target="$item->id">
                                    <x-slot:item>{{ $item->products->name }}</x-slot:it>
                                </x-delete-modal>
                            </div>
                            <p>{{ $item->products->name }}</p>
                            <p>Rp.{{ number_format($item->products->sale_price, 0, ',', '.') }}</p>
                            
                            <form action="{{ route('cart.add', $item->products->id) }}" method="POST" class="mt-2">
                                @csrf
                                <label for="quantity" class="form-label fw-bold">Quantity</label>
                                <div class="d-flex">
                                    <input type="number" min="0" name="quantity" id="quantity" class="form-control w-50 me-2"
                                        value="{{ $item->quantity }}">
                                    <button class="btn btn-primary" type="submit">Update Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-12 p-3">
                    <button data-bs-toggle="modal" data-bs-target="#confirmModal" type="button"
                        class="btn btn-primary text-white w-100">Checkout
                    </button>
                    <x-confirm-modal route="{{ route('cart.checkout')}}" :target="$item->id">
                        <p class="fw-bold">Total Price : Rp.{{ $total }}</p>
                    </x-confirm-modal>
                </div>
            @endif
        </div>
    </x-content-layout>
</x-app-layout>
