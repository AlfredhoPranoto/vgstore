<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 btn btn-warning border border-transparent rounded-md text-white']) }}>
    {{ $slot }}
</button>
