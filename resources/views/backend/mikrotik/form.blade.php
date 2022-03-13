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

                            @if ($mikrotik->exists)
                                <h5 class="text-center text-success">Edit</h5>
                            @else
                                <h5 class="text-center text-success">Add</h5>
                            @endif

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $error }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="card-body">
                            @if ($mikrotik->exists)
                                <form action="{{ route('mikrotik.update', $mikrotik->id) }}" method="post"
                                    class="needs-validation" novalidate>
                                    @method('put')
                                @else
                                    <form action="{{ route('mikrotik.store') }}" method="POST" class="needs-validation"
                                        novalidate>
                            @endif
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-class">Name</label>
                                <input type="text" name="name" value="{{ old('name', $mikrotik->name) }}"
                                    class="form-control" id="name" required>
                                <div class="invalid-feedback">
                                    <h6>Please enter name</h6>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-class">UserName</label>
                                <input type="text" name="user_name" value="{{ old('user_name', $mikrotik->user_name) }}"
                                    class="form-control" id="user_name" required>
                                <div class="invalid-feedback">
                                    <h6>Please enter username</h6>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-class">Password</label>
                                <input type="password" name="password" value="{{ old('password', $mikrotik->password) }}"
                                    class="form-control" id="password" required>
                                <div class="invalid-feedback">
                                    <h6>Please enter password</h6>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-class">IP Address</label>
                                <input type="text" name="ip_address" value="{{ old('ip_address', $mikrotik->ip_address) }}"
                                    class="form-control" id="ip_address" required>
                                <div class="invalid-feedback">
                                    <h6>Please enter ip address</h6>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-class">SSH Port</label>
                                <input type="number" name="ssh_port" value="{{ old('ssh_port', $mikrotik->ssh_port) }}"
                                    class="form-control" id="port" required>
                                <div class="invalid-feedback">
                                    <h6>Please enter ssh port</h6>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-class">API Port</label>
                                <input type="number" name="api_port" value="{{ old('api_port', $mikrotik->api_port) }}"
                                    class="form-control" id="port" required>
                                <div class="invalid-feedback">
                                    <h6>Please enter ssh port</h6>
                                </div>
                            </div>
                            <div class="form-group">
                                @if ($mikrotik->exists)
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
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
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
