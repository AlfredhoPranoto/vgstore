<form action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        @if (isset($sku))
            <div class="mb-3">
                <label for="sku" class="form-label fw-bold">SKU</label>
                <input class="form-control" type="text" name="sku" id="sku" value="LALADA{{ $id }}"
                    disabled>
            </div>
        @endif
        <div class="col-md-6">
            <label for="name" class="form-label fw-bold">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $name }}"
                required autocomplete="off">
            <x-error-message :message="$errors->first('name')" />
        </div>
        <div class="col-md-6">
            <label for="price" class="form-label fw-bold">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $price }}"
                autocomplete="off">
            <x-error-message :message="$errors->first('price')" />
        </div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label fw-bold">Description</label>
        <textarea class="form-control" name="description" id="description" style="resize: none" rows="4" required>{{ $desc }}</textarea>
        <x-error-message :message="$errors->first('description')" />
    </div>

    <div class="mb-3">
        <label for="sale_price" class="form-label fw-bold">Sale Price</label>
        <input type="text" name="sale_price" id="sale_price" class="form-control" value="{{ $sale_price }}"
            required autocomplete="off">
        <x-error-message :message="$errors->first('sale_price')" />
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label fw-bold" for="photo">Image</label>
            <input class="form-control" type="file" name="photo" id="photo" @if(isset($required)) {{$required}} @endif>
            <x-error-message :message="$errors->first('photo')" />
        </div>

        <div class="col-md-6">
            <label for="category_id" class="form-label fw-bold">Category</label>
            <select name="category_id" id="category_id" class="form-select" required>
                <option value="">Select One</option>
                {{ $categories }}
            </select>
            <x-error-message :message="$errors->first('category_id')" />
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label fw-bold" for="stock">Stock</label>
            <input class="form-control" type="number" min="0" name="stock" id="stock" value="{{ $stock }}">
            <x-error-message :message="$errors->first('stock')" />
        </div>
        <div class="col-md-6">
            <label class="form-label fw-bold" for="stock">Release Date</label>
            <input class="form-control" type="date" min="0" name="release_date" id="release_date" value="{{ $release_date }}">
            <x-error-message :message="$errors->first('stock')" />
        </div>
    </div>

    <div class="mb-3">
        {{ $slot }}
    </div>
</form>
