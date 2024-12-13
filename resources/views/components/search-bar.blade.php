<form class="d-flex w-100" action="" method="get">
    <input {{ $attributes->merge(['class' => 'form-control w-100', 'type' => 'search', 'id' => 'search ']) }}
        name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}">
    <x-primary-button type="submit" class="ms-2">Search</x-primary-button>
</form>
