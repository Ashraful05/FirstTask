@extends('layouts.app')
@section('content')
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <form action="{{ route('vendor.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Vendor Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            <span class="text-center text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>
        </div>
        <button type="submit" class="btn btn-primary">Add Info</button>
    </form>

@endsection


