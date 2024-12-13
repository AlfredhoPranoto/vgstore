<x-app-layout>
    @slot('title', 'Category | Edit')

    <x-slot name="header">
        Category Update
    </x-slot>


    <x-content-layout>
        <x-slot name="bg">bg-light</x-slot>
        <x-category-form>
            @method('PUT')
            <x-slot:route>{{ route('category.update', $category->id) }}</x-slot:route>
            <x-slot:name>{{ $category->name }}</x-slot:name>
            <x-slot:desc>{{ $category->description }}</x-slot:desc>
            <x-warning-button>Update Category</x-warning-button>
        </x-category-form>
    </x-content-layout>

</x-app-layout>
