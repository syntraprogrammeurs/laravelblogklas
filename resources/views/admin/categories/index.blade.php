@extends('layouts.admin')
@section('content')
    <h1>All Categories</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
        </tr>
        </thead>
        <tbody>
        @if ($categories)
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at ? $category->created_at : 'no date'}}</td>
                    <td>{{$category->updated_at ? $category->updated_at : 'no date'}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop
