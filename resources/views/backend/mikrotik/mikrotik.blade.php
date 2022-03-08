@extends('layouts.app')
@section('content')

    @if(Session::has('message'))
        <div class="alert alert-primary" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <form action="{{ route('mikrotik.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            <span class="text-center text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">UserName</label>
            <input type="text" name="user_name" class="form-control" id="exampleInputPassword1" placeholder="">
            <span class="text-center text-danger">{{$errors->has('user_name')?$errors->first('user_name') : ''}}</span>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
            <span class="text-center text-danger">{{$errors->has('password')?$errors->first('password') : ''}}</span>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">SSH Port</label>
            <input type="number" name="ssh_port" class="form-control" id="exampleInputPassword1" placeholder="">
            <span class="text-center text-danger">{{$errors->has('ssh_port')?$errors->first('ssh_port') : ''}}</span>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">API Port</label>
            <input type="number" name="api_port" class="form-control" id="exampleInputPassword1" placeholder="">
            <span class="text-center text-danger">{{$errors->has('api_port')?$errors->first('api_port') : ''}}</span>
        </div>
        <button type="submit" class="btn btn-primary">Add Info</button>
    </form>

@endsection
