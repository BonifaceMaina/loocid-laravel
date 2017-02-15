@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Organizations</div>

                    <div class="panel-body">
                        {{--Here, you will see organizations... Click here to <a href="{{ url('/organization/create') }}">Create one</a>--}}
                        <h1>Users</h1>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Location</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                            </thead>

                            @if($organizations)

                                @foreach($organizations as $organization)
                                    <tbody>
                                    <tr>
                                        <td>{{$organization->id}}</td>
                                        <td>{{$organization->name}}</td>
                                        <td>{{$organization->email}}</td>
                                        <td>{{$organization->location}}</td>
                                        <td>{{$organization->description}}</td>
                                        <td>{{$organization->created_at->diffForHumans()}}</td>
                                        <td>{{$organization->updated_at->diffForHumans()}}</td>
                                    </tr>
                                    </tbody>

                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection