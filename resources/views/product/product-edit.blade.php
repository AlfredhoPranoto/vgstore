<x-app-layout>
    @slot('title', 'Product | Edit')

    <x-slot name="header">
        Product Update
    </x-slot>


    <x-content-layout>
        <x-slot name="bg">bg-light</x-slot>
        <x-product-form>
            @method('PUT')
            <x-slot:route>{{ route('product.update', $product->id) }}</x-slot:route>

            <x-slot:sku>
                <x-slot:id>{{ $product->id }}</x-slot:id>
            </x-slot:sku>

            <x-slot:name>{{ $product->name }}</x-slot:name>
            <x-slot:price>{{ $product->price }}</x-slot:price>
            <x-slot:desc>{{ $product->description }}</x-slot:desc>
            <x-slot:sale_price>{{ $product->sale_price }}</x-slot:sale_price>
            <x-slot:stock>{{ $product->stock }}</x-slot:stock>
            <x-slot:release_date>{{ $product->release_date }}</x-slot:release_date>
            <x-slot:image>{{ asset('img/product-image/' . $product->image) }}</x-slot:image>

            <x-slot:categories>
                <option selected value="{{ $product->category_id }}">{{ $product->category->name }}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </x-slot:categories>

            <x-warning-button>Update Product</x-warning-button>
        </x-product-form>
    </x-content-layout>

</x-app-layout>
