<x-app-layout>
    @slot('title', 'Product | Create')

    <x-slot name="header">
        Product Add
    </x-slot>


    <x-content-layout>
        <x-slot name="bg">bg-light</x-slot>
        <x-product-form>
            <x-slot:route>{{ route('product.create') }}</x-slot:route>
            <x-slot:name>{{ old('name') }}</x-slot:name>
            <x-slot:price>{{ old('price') }}</x-slot:price>
            <x-slot:desc>{{ old('description') }}</x-slot:desc>
            <x-slot:required>required</x-slot:required>
            <x-slot:sale_price>{{ old('sale_price') }}</x-slot:sale_price>
            <x-slot:stock>{{ old('stock') }}</x-slot:stock>
            <x-slot:release_date>{{ old('release_date') }}</x-slot:release_date>
            <x-slot:categories>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </x-slot:categories>

            <x-warning-button>Add Product</x-warning-button>
        </x-product-form>

    </x-content-layout>

</x-app-layout>
