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
                            <div class="input-group">
                                <input type="text" name="search" id="" value="" class="form-control" placeholder="search data">
                           </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-body-title text-center">OLT Type List
                                <a href="{{ route('olttype.create') }}" class="btn btn-primary" style="float: right;">Create</a>
                            </h6>
                            <div class="table-wrapper">
                                <table  id="datatable1" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">#SL No.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            
                                        @foreach ($oltTypes as $row => $oltType)
                                            <tr>
                                                <th scope="row">{{ ++$row }}</th>
                                                <td>{{ $oltType->name }}</td>
                                                <td>
                                                    <a href="{{ route('olttype.edit', $oltType->id) }}" class="btn btn-success">Edit</a>
                                                    <form action="{{ route('olttype.destroy', $oltType->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" name="btn" class="btn btn-danger mt-2">Delete</button>
                                                    </form>
                                                    {{-- <a href="{{ route('olttype.destroy',['id'=>$oltType->id]) }}">Delete</a> --}}
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
<<<<<<< HEAD
    </section>
        
    
    
=======
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th scope="col">#SL No.</th>
                <th scope="col">Name</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($oltTypes as $row => $oltType)
                <tr>
                    <th scope="row">{{++$row}}</th>
                    <td>{{$oltType->name}}</td>
                    <td>
                        <a href="{{ route('olttype.edit',$oltType->id) }}" class="btn btn-success">Edit</a><br><br>
                        <form action="{{ route('olttype.destroy',$oltType->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" name="btn" class="btn btn-danger" mt-2>Delete</button>
                        </form>
                        {{--                    <a href="{{ route('olttype.destroy',['id'=>$oltType->id]) }}">Delete</a>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

>>>>>>> f06f27db2961616c5a0880158d3bb93e69a7f735
@endsection
