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
                            {!! Form::label('Date Founded', 'Date Founded') !!}
                            {!! Form::date('date founded', \Carbon\Carbon::now()) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Location', 'Location') !!}
                            {!! Form::text('location', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Description', 'Description') !!}
                            {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Image', 'Image') !!}
                            {!! Form::file('image', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Upload File', 'Upload File') !!}
                            {!! Form::file($organization, $attributes = []) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Organization Type', 'Organization Type') !!}
                            {!! Form::radio('name', 'Profit') !!}
                            {!! Form::radio('name', 'Non Profit') !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Contact Email', 'Contact Email') !!}
                            {!! Form::label('email', 'E-Mail Address', ['class' => 'awesome']) !!}
                        </div>
                        <button class="btn btn-success" type="submit">Create Organization!</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection