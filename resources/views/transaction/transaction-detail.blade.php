<x-app-layout>
    @slot('title', 'Transaction Detail')
    <x-slot name="header">
        Transaction Detail
    </x-slot>

    <x-content-layout>
        <x-slot name="bg">bg-light</x-slot>
        @foreach ($transaction as $item)
            @foreach ($item->products as $product)
                <div class="row">
                    <div class="col-md-3 justify-content-center align-items-center d-flex">
                        <img src="{{ asset('img/released/' . $product->ver_image) }}" style="height:240px"
                            alt="...">
                    </div>

                    <div class="col-md-6 d-flex flex-column">
                        <h2>{{ $product->name }}</h2>
                        <p class="mt-2">{{ $product->description }}</p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-end fw-bold">
                            Rp.{{ number_format($product->sale_price, 0, ',', '.') }} x
                            {{ $product->pivot->quantity }}
                        </p>
                    </div>
                </div>
                <div class="row px-4 mt-3">
                    <div class="col-md-3">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span>Delivered on {{ $item->created_at->format('F, d Y') }}</span>
                    </div>
                </div>
                <hr>
            @endforeach
        @endforeach
    </x-content-layout>
</x-app-layout>
