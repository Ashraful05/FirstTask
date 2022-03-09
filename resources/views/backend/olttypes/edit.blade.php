@extends('layouts.app')
@section('content')
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <form action="{{ route('olttype.update',$olttype->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">OLT Type Name</label>
            <input type="text" name="name" value="{{ $olttype->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            <span class="text-center text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>
        </div>
        <button type="submit" class="btn btn-primary">Add OLTTYPE Info</button>
    </form>

@endsection



