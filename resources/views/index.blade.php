@extends('layouts.index')

@section('content')

{{--carousel starts here--}}
<div class="carousel-class">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!--the carousel indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!--this is the wrapper for the slides-->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('/images/carousel.jpg')}}" alt="Carousel">
                <div class="carousel-caption">
                    <h3></h3>
                </div>
            </div>

            <div class="item ">
                <img src="{{asset('/images/carousel2.jpg')}}" alt="Carousel2">
                <div class="carousel-caption">
                    <h3></h3>
                </div>
            </div>

            <div class="item">
                <img src="{{asset('/images/carousel3.jpg')}}" alt="Carousel 3">
                <div class="carousel-caption">
                    <h3></h3>
                </div>
            </div>

            <div class="item ">
                <img src="{{asset('/images/carousel4.jpg')}}" alt="Carousel 4">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="here">
                        <div class="col-xs-4">
                            <a href="organization.html">
                            <div class="column column-height"  style="background-color: beige">
                                <div class="image-container">
                                    <img src="{{asset('/images/organizations/ngo1.jpg')}}" class="img-responsive">
                                </div><br>
                                <p class="organization-links">Organization's Name</p>
                            </div>
                            </a>
                        </div>

                        <div class="col-xs-4">
                            <a href="organization.html">
                            <div class="column column-height" style="background-color:beige;">
                                <div class="image-container">
                                    <img src="{{asset('/images/organizations/ngo1.png')}}" class="img-responsive">
                                </div><br>
                                <p class="organization-links">Organization's Name</p>
                            </div>
                            </a>
                        </div>

                        <div class="col-xs-4">
                            <a href="organization.html">
                            <div class="column column-height" style="background-color: beige">
                                <div class="image-container" style="background-color: white">
                                    <img src="{{asset('/images/organizations/ngo4.png')}}" class="img-responsive">
                                </div><br>
                                <p class="organization-links">Organization's Name</p>
                            </div>
                        </div>
                </div>
            </div>

            <div class="row">
                <div class="here">
                    <div class="col-xs-4">
                            <div class="column column-height"  style="background-color: beige">
                                <a href="organization.html">
                                    <div class="image-container">
                                        <img src="{{asset('/images/organizations/ngo1.jpg')}}" class="img-responsive images">
                                    </div><br>
                                </a>
                                <p class="organization-links">Organization's Name</p>
                            </div>
                    </div>

                    <div class="col-xs-4">
                            <div class="column column-height" style="background-color:beige;">
                                <a href="">
                                    <div class="image-container">
                                        <img src="{{asset('/images/organizations/ngo1.png')}}" class="img-responsive">
                                    </div><br>
                                </a>
                            </div>
                    </div>

                    <div class="col-xs-4">
                            <div class="column column-height" style="background-color: beige">
                                <a href="">
                                <div class="image-container">
                                    <img src="{{asset('/images/organizations/ngo4.png')}}" class="img-responsive images">
                                </div>
                                </a>
                                <div class="organizational-details">
                                    <p class="organization-links">Organization's Name</p>
                                    <p>Location</p>
                                    <p>Category</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection