@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="row">
            <div class="form-control align-text-top">
                <a href="{{ route('olttype.create') }}" class="btn btn-primary" onclick="return cofirim('are you sure to delete')">Create</a>
            </div>
        </div>
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

@endsection

