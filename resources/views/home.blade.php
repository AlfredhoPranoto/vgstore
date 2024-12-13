<x-app-layout>
    @slot('title', 'Home')
    <x-slot name="fluid">
        <div class="row d-flex flex-column text-center text-white justify-content-center align-items-center"
            style="height:91vh;background-size: cover; background-image: url({{ asset('img/background-image/main-bg.jpg') }}">
            <div class="w-50 p-4" style="background-image: url({{ asset('img/background-image/black-bg.jpeg') }}">
                <h1>Welcome to VGStore</h1>
                <h3>
                    <a class="text-decoration-none" href="#featured">Check our Featured Products</a>
                </h3>
            </div>
        </div>
    </x-slot>

    <x-content-layout>
        <x-mycart>
            {{ empty($cart) ? '0' : $cart->count() }}
        </x-mycart>
        <div id="featured" class="row mb-5">
            <div class="col-md-12">
                <h3 class="p-0 mb-3 text-white">Featured Products</h3>

                <x-carousel>
                    @foreach ($featured as $product)
                        <div class="carousel-item @if ($loop->iteration == 1) active @endif">
                            <div class="d-flex flex-md-row flex-column h-100">
                                <div class="col-md-8">
                                    <a href="{{ route('product.detail', $product->id) }}">
                                        <img src="{{ asset('img/released/' . $product->hor_image) }}"
                                            class="img-fluid rounded h-100" alt="...">
                                    </a>
                                </div>
                                <div class="col-md-4 text-white p-4 d-flex flex-column justify-content-between">
                                    <div class="title">
                                        <h4 class="mb-3">{{ $product->name }} </h4>
                                        <span
                                            class="badge rounded-pill text-bg-light">{{ $product->category->name }}</span>
                                        <p class="my-3 small">
                                            {{ $product->description }}
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="price">
                                            <p class="m-0 small">Release Date: {{ $product->release_date }}</p>
                                            <p class="fw-bold m-0">
                                                Rp.{{ number_format($product->sale_price, 0, ',', '.') }}</p>
                                            <small>Stock: {{ $product->stock }}</small>
                                        </div>
                                        <div class="info">
                                            <p class="m-0 fw-bold">Platform:</p>
                                            <i class="bi bi-windows me-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </x-carousel>
            </div>
        </div>

        <div class="banner bg-dark text-center p-4 text-white mb-5">
            <a href="{{ route('cart') }}" class="text-white text-decoration-none">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <img class="me-4" width="50px" src="{{ asset('img/icon/game.png') }}" alt="game">
                    <h2 class="text-uppercase m-0">Don't forgot to checkout your games!</h2>
                </div>
            </a>
        </div>

        <div class="row">
            <div class="col-md-12 mb-5">
                <h3 class="p-0 mb-3 text-white">Special Offers</h3>
                <x-carousel-card>
                    
                </x-carousel-card>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h3 class="p-0 mb-3 text-white">Upcoming Releases</h3>
                <x-carousel-upcoming>
                    @forelse ($upcoming as $product)
                        <div class="col-md-3 p-2">
                            <div class="card">
                                <img class="card-img-top img-fluid"
                                    src="{{ asset('img/released/' . $product->hor_image) }}" alt="Title" />
                                <div class="card-body text-white rounded-bottom p-2 px-3">
                                    <div class="d-flex justify-content-between">
                                        <span class="card-text small">{{ $product->release_date }}</span>
                                        <span
                                            class="card-text small">Rp.{{ number_format($product->sale_price, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="text-white mx-auto">No upcoming games</h1>
                    @endforelse
                </x-carousel-upcoming>
            </div>
        </div>

    </x-content-layout>
</x-app-layout>
