@if ($errors->any())
    <div class="alert alert-{{ $type }}">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>

@endif
