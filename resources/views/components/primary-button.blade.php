<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 btn btn-primary border border-transparent rounded-md']) }}>
    {{ $slot }}
</button>
