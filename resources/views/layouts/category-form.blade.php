<form action="{{ $route }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label fw-bold">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $name }}" required>
        <x-error-message :message="$errors->first('name')" />
    </div>
    <div class="mb-3">
        <label for="description" class="form-label fw-bold">Description</label>
        <textarea class="form-control" name="description" id="description" style="resize: none" rows="9" required>{{ $desc }}</textarea>
        <x-error-message :message="$errors->first('description')" />
    </div>
    <div class="mb-3">
        {{ $slot }}
    </div>
</form>
