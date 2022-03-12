@extends("layouts.app")
@section('content')
<div>
    <div class="mb-3 mt-3">
        @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>

<section class="py-5">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-body-title text-center"><strong>Dashboard Page</strong></h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ route('olttype.index') }}">Olttype</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('mikrotik.index') }}">Mikrotik</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('olt.index') }}">Olt</a>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('routertype.index') }}">RouterType</a>
                        </div>
                        <div class="col-md-1">
                            <a href="{{ route('vendor.index') }}">Vendor</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
</div>
</section>

<script>


// $(document).ready(function() {
//     $('#example').DataTable();
// } );
// </script>

@endsection