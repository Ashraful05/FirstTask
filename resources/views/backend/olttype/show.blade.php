@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$oltType->name}}</td>
            </tr>
        </tbody>
    </table>
@endsection

