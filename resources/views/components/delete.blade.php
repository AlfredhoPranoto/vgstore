<button data-bs-toggle="modal" data-bs-target="#deleteModal{{ $target }}"
    {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-danger w-100 mt-2']) }}>{{ $slot }}</button>
