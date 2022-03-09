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

        @foreach($vendors as $row => $vendor)
        <tr>
            <th scope="row">{{ ++$row }}</th>
            <td>{{$vendor->name}}</td>
            <td>
{{--                <a href="{{ route('vendor.edit',['id'=>$vendor->id]) }}"></a>Edit--}}
            </td>
            <td>
{{--                <a href="{{ route('vendor.destroy',['id'=>$vendor->id]) }}"></a>Delete</td>--}}
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
