@extends('layouts.app')
@section('content')
    <div class = "container">
        <a href = "{{route('popupadd')}}" class = 'btn btn-success float-right pt-3' style="text-decoration:none;">Add New Event</a>
        <table class = "table table-hover">
            <thead>
            <tr>
                <td>id</td><td>Content</td><td>Show</td><td>Edit</td><td>Delete</td><td>Created at</td>
            </tr>
            </thead>
            <tbody>
            @foreach($popup as $popups)
            <tr>
                <td>{{$popups->id}}</td><td>{{$popups->content}}</td><td>{{$popups->show}}</td><td><a href = "#" class = "btn btn-success">Edit</a></td><td><a href = "#" class = "btn btn-danger" style="text-decoration:none">Delete</a></td><td>{{$popups->created_at}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection