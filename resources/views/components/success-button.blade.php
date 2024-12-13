<a href="{{ $route }}" {{ $attributes->merge(['type' => 'button', 'class' => 'px-4 btn btn-success border border-transparent rounded-md']) }}>
    {{ $slot }}
</a>
