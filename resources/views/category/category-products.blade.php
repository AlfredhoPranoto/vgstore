<x-app-layout>
    @slot('title', 'Category | ' . $category->name)
    <x-slot name="header">
        {{ $category->name }}
    </x-slot>

    <x-content-layout>
        <x-alert class="alert-success" />
        <x-mycart />
        <div class="row">
            <div class="col-8 d-flex flex-fill align-items-center">
                <x-search-bar :placeholder="'Search product here...'" :name="'search_product'" :value="request()->search_product" />
            </div>
            @auth
                @if (Auth::user()->role_id == 1)
                    <div class="col-md-4 d-flex justify-content-end">
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
                            <img src="{{ asset('img/product-image/' . $product->image) }}" class="card-img-top"
                                style="object-fit:cover; height:200px" alt="...">
                        </x-slot:img>
                        <a href="{{ route('product.detail', $product->id) }}"
                            class="card-text text-end m-0 text-decoration-none" style="font-size:0.9rem">Read More</a>
                        <p class="card-title fw-bold">{{ $product->name }}</p>
                        <span class="badge rounded-lg mb-2 text-bg-primary w-25">{{ $category->name }}</span>
                        <div class="card-text mb-2">
                            <span class="me-2">
                                Rp.{{ number_format($product->sale_price, 0, ',', '.') }}
                            </span>
                            <span class="text-secondary" style="text-decoration: line-through">
                                Rp.{{ number_format($product->price, 0, ',', '.') }}
                            </span>
                        </div>
                        @auth
                            @if (Auth::user()->role_id == 1)
                                <x-delete :target="$product->id">Delete Product</x-delete>
                                <x-modal route="{{ route('product.destroy', $product->id) }}" :target="$product->id">
                                    <x-slot:item>{{ $product->name }}</x-slot:item>
                                </x-modal>
                                <x-edit route="{{ route('product.edit', $product->id) }}">Edit Product</x-edit>
                            @else
                                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary w-100 mt-auto">Add
                                    to
                                    Cart</a>
                            @endif
                        @endauth

                        @guest
                            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary w-100 mt-auto">Add
                                to
                                Cart</a>
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
