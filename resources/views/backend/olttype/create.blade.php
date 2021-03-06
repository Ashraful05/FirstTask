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
                            <h4 class="text-success" style="text-align: center">Add Olt Type</h4>
                        </div>
                        <div class="card-body">
                            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                            <form action="{{ route('olttype.store') }}" method="POST" class="form-horizontal">
                                @csrf
                                <div class="form-group">
                                    <label class="form-horizontal">Name</label>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"/>
                                        <span class="text-danger">{{$errors->has('name')?$errors->first('name'):'' }}</span>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <input type="submit" name="btn" value="Save" class=" btn btn-success"/>
                                    </div>
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



