<x-app-layout>
    @slot('title', 'Products')

    <x-content-layout>
        <x-alert />
        <x-mycart>
            {{ empty($cart) ? '0' : $cart->count() }}
        </x-mycart>
        <div class="row">
            <div class="col-md-9 d-flex flex-fill align-items-center">
                <x-search-bar :placeholder="'Search product here...'" :name="'search_product'" :value="request()->search_product" />
            </div>
            @auth
                @if (Auth::user()->role_id == 1)
                    <div class="col-md-3 d-flex justify-content-end">
                        <x-success-button :route="route('product.create')">Add Product</x-success-button>
                    </div>
                @endif
            @endauth
        </div>

        <div class="row">
            <x-search-error :item="$products">
                No Product
            </x-search-error>
            @foreach ($products as $product)
                <div class="col-md-3 mt-4">
                    <x-card :title="''">
                        <x-slot:img>
                            <img src="{{ asset('img/released/' . $product->ver_image) }}" class="card-img-top"
                                style="object-fit:cover; height:200px" alt="...">
                        </x-slot:img>
                        <a href="{{ route('product.detail', $product->id) }}"
                            class="card-text text-end text-decoration-none">Read More</a>
                        <p class="my-auto card-title fw-bold">{{ $product->name }}</p>
                        <span class="badge rounded-lg mb-2 text-bg-primary w-50">{{ $product->category->name }}</span>
                        <div class="card-text mb-2">
                            <span class="me-2">
                                Rp.{{ number_format($product->sale_price, 0, ',', '.') }}
                            </span>
                            @if ($product->price !== null)
                                <span class="text-secondary text-decoration-line-through">
                                    Rp.{{ number_format($product->price, 0, ',', '.') }}
                                </span>
                            @endif
                        </div>
                        @auth
                            @if (Auth::user()->role_id == 1)
                                <x-delete :target="$product->id">Delete Product</x-delete>
                                <x-delete-modal route="{{ route('product.destroy', $product->id) }}" :target="$product->id">
                                    <x-slot:item>{{ $product->name }}</x-slot:item>
                                </x-delete-modal>
                                <x-edit route="{{ route('product.edit', $product->id) }}">Edit Product</x-edit>
                            @else
                                @if ($product->stock == 0)
                                    <h5 class="text-center">Out of Stock</h5>
                                @else
                                    @if ($cart->contains('product_id', $product->id))
                                        <x-update-cart :id="$product->id" />
                                    @else
                                        <x-add-cart :id="$product->id" />
                                    @endif
                                @endif
                            @endif
                        @endauth

                        @guest
                            <x-add-cart :id="$product->id" />
                        @endguest
                    </x-card>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $products->withQueryString()->links() }}
        </div>
    </x-content-layout>
</x-app-layout>
