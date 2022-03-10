@extends('layouts.app')
@section('content')
    @if(Session::has('message'))
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
                            <h5 class="text-center text-success">Edit Form</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('olttype.update',$olttype->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-class">OLT Type Name</label>
                                    <input type="text" name="name" value="{{ $olttype->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                    <span class="text-center text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
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

@endsection



