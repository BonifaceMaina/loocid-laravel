@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Organizations</div>

                    <div class="panel-body">
                        Here, you will see organizations... Click here to <a href="{{ url('/organization/create') }}">Create one</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection