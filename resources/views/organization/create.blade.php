@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Organization</div>

                    <div class="panel-body">
                        {!! Form::model($organization, ['action' => 'OrganizationsController@store']) !!}

                        <div class="form-group">
                            {!! Form::label('Name', 'Name') !!}
                            {!! Form::text('name', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Description', 'Description') !!}
                            {!! Form::text('description', '', ['class' => 'form-control']) !!}
                        </div>

                        <button class="btn btn-success" type="submit">Create Organization!</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection