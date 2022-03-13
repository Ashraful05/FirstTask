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
                            <h6 class="card-body-title text-center"><strong>olt</strong>
                                <a href="{{ route('mikrotik.create') }}" class="btn btn-primary mb-2" style="float: right;">Create</a>
                            </h6>
                        </div>
                        <div class="card-body">

                            <div class="table-wrapper">
                                <table  id="example" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col" >Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mikrotiks as $row => $mikrotik)
                                            <tr>
                                                <th scope="row">{{ ++$row }}</th>
                                                <td>{{ $mikrotik->name }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-start">
                                                        <span class="me-2">
                                                            <a href="{{ route('mikrotik.edit', $mikrotik->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                        </span>
                                                        <span>
                                                            <form action="{{ route('mikrotik.destroy', $mikrotik->id) }}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" name="btn" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                                                            </form>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <script>
        

        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    
@endsection
