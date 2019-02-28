@extends('layouts.admin')
@section('content')
    <h1>All Posts</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">User</th>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Post link</th>
            <th scope="col">Comments</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>

        </tr>
        </thead>
        <tbody>
        @if ($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>
                        <img height="50" src="{{$post->photo ? asset($post->photo->file) :'http://place-hold.it/400x400'}}" alt="">
                    </td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>Post link</td>
                    <td>Comments</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>
    @stop
