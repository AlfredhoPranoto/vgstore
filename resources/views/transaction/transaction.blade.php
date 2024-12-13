<x-app-layout>
    @slot('title', 'Transaction')
    <x-slot name="header">
        Transaction
    </x-slot>

    <x-content-layout>
        @if ($transactions->count() == 0)
            <h1 class="text-white">No Transaction</h1>
        @endif
        @foreach ($transactions as $order)
            <div class="row bg-light p-3 mb-3">
                <div class="col-md-3">
                    <h5>Date placed</h5>
                    <p>{{ $order->created_at->format('F, d Y') }}</p>
                </div>
                <div class="col-md-3">
                    <h5>Order number</h5>
                    <p>{{ 'VGORDER' . $order->id }}</p>
                </div>
                <div class="col-md-3">
                    <h5>Total amount</h5>
                    <p>{{ 'Rp. ' . number_format($order->total_price, 0, ',', '.') }}</p>
                </div>
                <div class="col-md-3 align-items-center justify-content-end d-flex">
                    <a class="btn btn-primary" href="{{ route('transaction.detail', $order->id) }}">View Detail</a>
                </div>
            </div>
        @endforeach
    </x-content-layout>
</x-app-layout>
