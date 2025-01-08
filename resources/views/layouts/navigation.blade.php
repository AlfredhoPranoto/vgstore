<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">VGSTORE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('product.index') ? 'active fw-bold' : '' }}"
                        href="{{ route('product.index') }}" aria-current="page">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('category.index') ? 'active fw-bold' : '' }}"
                        href="{{ route('category.index') }}" aria-current="page">Categories</a>
                </li>
                @auth
                    @if (Auth::user()->role_id == 1)
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('transaction.index') ? 'active fw-bold' : '' }}"
                                href="{{ route('transaction.index') }}" aria-current="page">View Transaction</a>
                        </li>
                    @endif
                @endauth
            </ul>
            <div>
            @auth
                <x-dropdown :name="Auth::user()->email">
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </x-dropdown>
            @endauth
            @guest
                <x-dropdown :name="'guest'">
                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                </x-dropdown>
            @endguest
        </div>
        </div>
    </div>
</nav>
