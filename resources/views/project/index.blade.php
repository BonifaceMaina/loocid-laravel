@extends('layouts.app')

@section('content')

    <h1>Projects</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Org Id</th>
            <th>Name</th>
            <th>Location</th>
            <th>Description</th>
            <th>Started on</th>
            <th>Completes on</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>

        @if($project)
            <tbody>
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->organization_id}}</td>
                {{--<td><img src="{{ $project->photo ? URL::to($project->photo->image_path) : 'http://placehold.it/200x200'}}" alt=""></td>--}}
                <td>{{$project->name}}</td>
                <td>{{$project->location}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->start_date}}</td>
                <td>{{$project->end_date}}</td>
                <td>{{$project->created_at->diffForHumans()}}</td>
                <td>{{$project->updated_at->diffForHumans()}}</td>
            </tr>
            </tbody>
        @endif
    </table>

@stop