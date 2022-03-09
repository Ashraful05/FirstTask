@extends('layouts.app')
@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <form action="{{ route('olttype.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">OLT Type Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            <span class="text-center text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>
        </div>
        <div class="form-group">
            <div class="row">
                <button type="submit" class="btn btn-primary">Add OLTTYPE Info</button>
            </div>
        </div>
    </form>

@endsection



