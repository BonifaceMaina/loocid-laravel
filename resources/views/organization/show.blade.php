@extends('layouts.index')

@section('content')

    @if($organization)
    <div class="container organizational-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="avatar-container clearfix">
                   
                        <img src="{{ $organization->photo ? URL::to($organization->photo->image_path) : 'http://placehold.it/200x200'}}" alt="" class="img-responsive img-fluid">
                    
                </div>               
            </div>           
        </div>
        <div class="row">
            <div class="col-sm-8">
                <iframe width="745" height="315" src="https://www.youtube.com/embed/OAcXnzRNiCY" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
                <h4>Details</h4>
                <div class="basic-content-container table-responsive">
                    <table class="table table-sm">
                        <tr>
                            <td> <b>Location:</b></td>
                            <td>{{$organization->location}}</td>
                        </tr>
                        <tr>
                            <td><b>Sector: </b></td>
                            <td>Peace</td>
                        </tr>
                        <tr>
                            <td><b>Founded:</b></td>
                            <td>Year</td>
                        </tr>
                        <tr>
                            <td><b>Website: </b></td>
                            <td><a href="www.website.com">www.website.com</a></td>
                        </tr>                        
                    </table> 
                     
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="#" class="btn btn-block btn-social btn-twitter">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="btn btn-block btn-social btn-facebook">
                            <span class="fa fa-facebook"></span>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="btn btn-block btn-social btn-instagram">
                            <span class="fa fa-instagram"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <h4>DESCRIPTION</h4>
                <div class="basic-content-container">
                    <p>{{$organization->general_description}} </p>
                </div>
            </div>

            <div class="col-sm-4">


            </div>

        </div>

    <h4>FUNDRAISING AND FINANCIALS</h4>

    <div class="organizations ">
        <div class="row">

            <!--These are the organizations' tabs for content-->
            <div class="col-sm-8">
                <div class="basic-content-container">
                    <div class="organization-tabs">
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="active"><a href=".home" role="tab" data-toggle="tab">Home</a></li>
                            <li><a href=".profile" role="tab" data-toggle="tab">Profile</a></li>
                            <li><a href=".messages" role="tab" data-toggle="tab">Messages</a></li>
                            <li><a href=".settings" role="tab" data-toggle="tab">Settings</a></li>
                        </ul>
                    </div>

                    <!-- Tab panes with classes-->
                    <div class="tab-content">
                        <div class="tab-pane active home">
                            <h3>About the Organization</h3>
                            <p>{{$organization->general_description}} </p>
                        </div>
                        <div class="tab-pane profile">
                            @if(Auth::guest())
                                {{--user is not logged in--}}
                                <p>You have to be logged in to view this information</p>
                            @else
                                {{--user is logged in--}}
                                <p>You are viewing private information.</p>
                            @endif
                        </div>
                        <div class="tab-pane messages">Messages</div>
                        <div class="tab-pane settings">Settings</div>
                    </div>
                </div>

            </div>
        </div>

    </div>
 </div>

@endif
@endsection
