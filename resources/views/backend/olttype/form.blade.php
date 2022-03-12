
@extends('layouts.app')
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
                            
                            @if($olttype->exists)
                                <h5 class="text-center text-success">Edit</h5>
                            @else
                            <h5 class="text-center text-success">Add</h5>
                            @endif
                            @error('name')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                        <div class="card-body">
                            @if ($olttype->exists)
                                <form action="{{ route('olttype.update',$olttype->id) }}" method="post" class="needs-validation" novalidate>
                                    @method('put')
                            @else
                                <form action="{{ route('olttype.store') }}" method="POST" class="needs-validation" novalidate>
                            @endif
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-class">Name</label>
                                    <input type="text" name="name" value="{{ old('name',$olttype->name) }}" class="form-control" id="name" required>
                                    <div class="invalid-feedback">
                                        Name field is required
                                    </div>
                                    {{-- <span class="text-center text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span> --}}
                                </div>
                                <div class="form-group">
                                    @if($olttype->exists)
                                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                                    @else
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>

                                    @endif
                                </div>
                            </form> 
                        </div>
                        <div class="card-footer">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script>
        (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()
</script>

@endsection



