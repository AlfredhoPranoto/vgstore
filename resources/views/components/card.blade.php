<div {{ $attributes->merge(['class' => 'card h-100 mb-3 border border-4 border-dark']) }}>
    @if (isset($img))
        <div class="card-header">{{ $img }}</div>
    @endif
    <div class="card-body d-flex bg-light flex-column pt-2 justify-content-evenly">
        <h4 class="card-title">{{ $title }}</h5>
        {{ $slot }}
    </div>
</div>
