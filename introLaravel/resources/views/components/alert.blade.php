
<div class="container mt-4">
    <div class="alert alert-{{ $tipo }} alert-dismissible fade show" role="alert">
        {{ $slot }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>