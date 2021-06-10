
@if (session($key))
    <div class="alert alert-{{ $type }}" role="alert">
        {{ session($key) }}
    </div>
@endif