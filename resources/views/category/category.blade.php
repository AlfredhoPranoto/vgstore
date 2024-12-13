<x-app-layout>
    @slot('title', 'Category')

    <x-slot name="header">
        Category
    </x-slot>

    <x-content-layout>
        <x-alert class="alert-success" />

        <div class="row">
            <div class="col-md-9 d-flex align-items-center flex-fill">
                <x-search-bar :placeholder="'Search category here...'" :name="'search_category'" :value="request()->search_category" />
            </div>
            @auth
                @if (Auth::user()->role_id == 1)
                    <div class="col-md-3 justify-content-end d-flex">
                        <x-success-button :route="route('category.create')">Add Category</x-success-button>
                    </div>
                @endif
            @endauth
        </div>

        <div class="row">
            <x-search-error :item="$categories">
                No Category
            </x-search-error>
            @foreach ($categories as $category)
                <div class="col-md-3 mt-4">
                    <x-card class="pt-3">
                        <x-slot:title>{{ $category->name }}</x-slot:title>
                        <p style="font-size: 0.9rem" class="card-text">{{ $category->description }}</p>
                        <a href="{{ route('category.products', $category->id) }}"
                            class="btn btn-primary w-100 mt-auto">See Product</a>
                        @auth
                            @if (Auth::user()->role_id == 1)
                                <x-delete :target="$category->id">Delete Category</x-delete>
                                <x-delete-modal route="{{ route('category.destroy', $category->id) }}" :target="$category->id">
                                    <x-slot:item>{{ $category->name }}</x-slot:item>
                                </x-delete-modal>
                                <x-edit route="{{ route('category.edit', $category->id) }}">Edit
                                    Category</x-edit>
                            @endif
                        @endauth
                    </x-card>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $categories->withQueryString()->links() }}
        </div>
    </x-content-layout>

</x-app-layout>
