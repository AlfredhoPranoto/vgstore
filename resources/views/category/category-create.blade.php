<x-app-layout>
    @slot('title', 'Category | Create')

    <x-slot name="header">
        Category Add
    </x-slot>


    <x-content-layout>
        <x-slot name="bg">bg-light</x-slot>
        <x-category-form>
            <x-slot:route>{{ route('category.create') }}</x-slot:route>
            <x-slot:name>{{ old('name') }}</x-slot:name>
            <x-slot:desc>{{ old('description') }}</x-slot:desc>
            <x-warning-button>Add Category</x-warning-button>
        </x-category-form>
    </x-content-layout>

</x-app-layout>
