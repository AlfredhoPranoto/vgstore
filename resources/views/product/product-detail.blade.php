<x-app-layout>
    @slot('title', 'Product Detail')
    <x-slot name="header">
        Product Detail
    </x-slot>
    <x-content-layout>
        <x-slot:style>height: 80vh</x-slot:style>
        <x-slot:bg>bg-light</x-slot:bg>
        <x-mycart>
            {{ empty($cartItem) ? '0' : $cartItem->count() }}
        </x-mycart>
        <div class="row h-100">
            <div class="col-md-6 justify-content-center align-items-center d-flex">
                <img src="{{ asset('img/released/' . $product->ver_image) }}" style="height:350px" alt="...">
            </div>

            <div class="col-md-6 d-flex justify-content-center flex-column">
                <h1>{{ $product->name }}</h1>
                <p>Genre: {{ $product->category->name }}</p>
                <div>
                    <span class="me-2 fw-bold fs-5">
                        Rp.{{ number_format($product->sale_price, 0, ',', '.') }}
                    </span>
                    @if ($product->price != null)
                        <span class="text-secondary text-decoration-line-through">
                            Rp.{{ number_format($product->price, 0, ',', '.') }}
                        </span>
                    @endif
                </div>
                <p class="mt-2">{{ $product->description }}</p>
                <div class="d-flex justify-content-between">
                    <p class="m-0">Stock:
                        @if ($product->stock == 0)
                            Ouf of Stock
                        @else
                            {{ $product->stock }}
                        @endif
                    </p>
                    <p class="m-0">Release Date: {{ $product->release_date }}</p>
                </div>
                @auth
                    @if (Auth::user()->role_id != 1)
                        <div class="mt-3">
                            @if ($product->stock != 0)
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <label class="form-label" for="quantity">Quantity</label>
                                    <div class="d-flex">
                                        <input type="number" min="0" name="quantity" id="quantity"
                                            class="form-control w-50 me-2"
                                            value="{{ empty($cart) ? '0' : $cart->quantity }}">
                                        <button class="btn btn-primary" type="submit">Add to Cart</button>
                                    </div>
                                </form>
                            @endif
                            @if (session()->has('error'))
                                <p class="text-danger mt-1">
                                    {{ session()->get('error') }}

                                </p>
                            @endif
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </x-content-layout>
</x-app-layout>
