<!-- PESAN SUKSES DAN ERROR -->
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>{!!session('success')!!}</strong>
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger mg-b-0" role="alert">
    <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>{!!session('error')!!}</strong>
</div>
@endif