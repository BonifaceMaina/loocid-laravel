@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!


                    @role('user')
                        <h1>This is basic information about an organization</h1>
                    <br>
                    @endrole

                    @role('prouser')
                        <h2>You are a prouser, you can see more details about all organizations.</h2>
                    <br>
                    @endrole

                    @role('donor')
                        <h3>You are a <strong>Donor!</strong> You have limitless access to organizational information you have donated to.</h3>
                    <br>
                    @endrole
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
