@extends('layouts.app')
@section('content')
    <div>
        <div class="mb-3 mt-3">
            
        </div>
    </div>
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-body-title text-center">OLT Type List
                                <a href="{{ route('olttype.create') }}" class="btn btn-primary mb-2" style="float: right;">Create</a>
                            </h6>
                        </div>
                        <div class="card-body">

                            <div class="table-wrapper">
                                <table  id="example" class="table table-bordered table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#SL No.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col" >Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($oltTypes as $row => $oltType)
                                            <tr>
                                                <th scope="row">{{ ++$row }}</th>
                                                <td>{{ $oltType->name }}</td>
                                                <td>
                                                    <a href="{{ route('olttype.edit', $oltType->id) }}" class="btn btn-success mr-2"><i class="fa fa-edit"></i></a>
                                                    <form action="{{ route('olttype.destroy', $oltType->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" name="btn" class="btn btn-danger mt-2"><i class="fa fa-delete"></i></button>
                                                    </form>
                                                
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
