<form action="{{ route('cart.add', $id) }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary w-100">
        Add to Cart
    </button>
</form>

