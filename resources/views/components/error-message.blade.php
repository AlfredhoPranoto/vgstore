@if ($errors->any())
    <p {{ $attributes->merge(['class' => 'text-danger mt-2 fs-6']) }}>
        {{ $message }}
    </p>
@endif
