@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Organization</div>

                    @include('includes.form-error')

                    <div class="panel-body">
                        {!! Form::model($organization, ['action' => 'OrganizationsController@store', 'files'=>'true']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', '', ['class' => 'form-control']) !!}
                        </div>

                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('Date Founded', 'Date Founded') !!}--}}
                            {{--{!! Form::date('date founded', \Carbon\Carbon::now()) !!}--}}
                        {{--</div>--}}
                        <div class="form-group">
                            {!! Form::label('location', 'Location') !!}
                            {!! Form::text('location', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('general_description', 'General Description') !!}
                            {!! Form::textarea('general_description', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('privileged_content', 'Privileged Content') !!}
                            {!! Form::textarea('privileged_content', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('photo_id', 'Image') !!}
                            {!! Form::file('photo_id', '', ['class' => 'form-control']) !!}
                        </div>

                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('Upload File', 'Upload File') !!}--}}
                            {{--{!! Form::file($organization, $attributes = []) !!}--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('Organization Type', 'Organization Type') !!}--}}
                            {{--{!! Form::radio('name', 'Profit') !!}--}}
                            {{--{!! Form::radio('name', 'Non Profit') !!}--}}
                        {{--</div>--}}

                        <div class="form-group">
                            {!! Form::label('email', 'Contact Email') !!}
                            {!! Form::text('email', '', ['class' => 'form-control']) !!}
                        </div>
                        <button class="btn btn-success" type="submit">Create My Organization!</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection