@extends('layouts.app')

@section('content')

    <h1>Organization</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Mission</th>
            <th>Vision</th>
            <th>Date Founded</th>
            <th>Video Link</th>
            <th>Email</th>
            <th>Location</th>
            <th>General description</th>
            <th>Privileged Content</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>

        @if($organization)
            <tbody>
            <tr>
                <td>{{$organization->id}}</td>
                <td><img src="{{ $organization->photo ? URL::to($organization->photo->image_path) : 'http://placehold.it/200x200'}}" alt=""></td>
                <td>{{$organization->name}}</td>
                <td>{{$organization->mission}}</td>
                <td>{{$organization->vision}}</td>
                <td>{{$organization->datefounded}}</td>
                <td>{{$organization->videolink}}</td>
                <td>{{$organization->email}}</td>
                <td>{{$organization->location}}</td>
                <td>{{$organization->general_description}}</td>
                <td>{{$organization->privileged_content}}</td>
                <td>{{$organization->created_at->diffForHumans()}}</td>
                <td>{{$organization->updated_at->diffForHumans()}}</td>
            </tr>
            </tbody>
        @endif
    </table>

@stop