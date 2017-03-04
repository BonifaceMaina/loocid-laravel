@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Organization</div>

                    @include('includes.form-error')

                    <div class="panel-body">
                        <div class="col-sm-3">

                            <img src="{{URL::to($organization->photo->image_path)}}" alt="" class="img-responsive img-rounded">
                        </div>

                        <div class="col-sm-9">
                        {!! Form::model($organization, ['method'=>'PATCH','action'=>['OrganizationsController@update', $organization->id], 'files'=>true]) !!}

                            <div class="form-group">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('mission', 'Mission') !!}
                                {!! Form::text('mission', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('vision', 'Vision') !!}
                                {!! Form::text('vision', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('datefounded', 'Date Founded') !!}
                                {!! Form::date('datefounded', \Carbon\Carbon::now()) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('location', 'Location') !!}
                                {!! Form::text('location', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('general_description', 'General Description') !!}
                                {!! Form::textarea('general_description', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('privileged_content', 'Privileged Content') !!}
                                {!! Form::textarea('privileged_content', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('photo_id', 'Image') !!}
                                {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('videolink', 'Video Link') !!}
                                {!! Form::text('videolink', null, ['class' => 'form-control']) !!}
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
                                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                            </div>
                            <button class="btn btn-success" type="submit">Create My Organization!</button>

                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection