@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#SL No.</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($oltTypes as $row => $oltType)
            <tr>
                <th scope="row">{{++$row}}</th>
                <td>{{$oltType->name}}</td>
                <td>
                    <a href="{{ route('olttype.edit',$oltType->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('olttype.destroy',$oltType->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" name="btn" class="btn btn-danger">Delete</button>
                    </form>
{{--                    <a href="{{ route('olttype.destroy',['id'=>$oltType->id]) }}">Delete</a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

