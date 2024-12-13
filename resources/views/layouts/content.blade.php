<div class="py-4">
    <div class="py-4 px-5 @if (isset($bg)){{ $bg }}@endif" 
    @if (isset($style)) style="{{ $style }}" @endif>
        {{ $slot }}
    </div>
</div>
