@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
            {{-- <span aria-hidden="true">&times;</span> --}}
        </button>
    </div>
@endif


{{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Warning Alert Message -</strong> You need to solve the below fields before going to the next step
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div> --}}
