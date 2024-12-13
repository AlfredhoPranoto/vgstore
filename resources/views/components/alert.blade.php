@if (session()->has('success'))
    <div {{ $attributes->merge(['class' => 'alert alert-success alert-dismissible fade show']) }} role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session()->get('message') }}
    </div>
@elseif(session()->has('destroy'))
    <div {{ $attributes->merge(['class' => 'alert alert-danger alert-dismissible fade show']) }} role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session()->get('message') }}
    </div>
@endif
