<label {{ $attributes->merge(['class' => 'form-label text-sm text-black']) }}>
    {{ $value ?? $slot }}
</label>
