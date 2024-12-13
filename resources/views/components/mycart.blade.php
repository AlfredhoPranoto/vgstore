@auth
    @if (Auth::user()->role_id != 1)
        <div class="bg-primary rounded-pill position-fixed px-3 py-2 text-white z-3" style="bottom: 40px; right: 40px">
            <a class="text-decoration-none text-white" href="{{ route('cart') }}"><i class="bi bi-bag me-2">
                </i>My Cart</a>
            <span class="badge rounded-pill bg-danger position-absolute" style="top: -5px">{{ $slot }}</span>
        </div>
    @endif
@endauth

@guest
    <div class="bg-primary rounded-pill position-fixed px-3 py-2 text-white z-3" style="bottom: 40px; right: 40px">
        <a class="text-decoration-none text-white" href="{{ route('cart') }}"><i class="bi bi-bag me-2">
            </i>My Cart</a>
        <span class="badge rounded-pill bg-danger position-absolute" style="top: -5px">{{ $slot }}</span>
    </div>
@endguest
