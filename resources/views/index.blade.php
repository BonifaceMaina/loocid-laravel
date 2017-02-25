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

                    @if($organizations)
                        @foreach($organizations as $organization)
                        <div class="col-xs-4">
                            <a href="{{ route('organization.index') }}">
                            <div class="column column-height"  style="background-color: beige">
                                <div class="image-container" style="background-color: white">
                                    {{--<img src="{{ $organizations->photo ? $organizations->photo->image_path : '/images/organizations/ngo1.jpg'}}" class="img-responsive">--}}
                                    <img src="{{asset('/images/organizations/ngo1.jpg')}}" class="img-responsive" >
                                </div>
                                <p class="organization-links">{{ $organization->name }}</p>
                                <p class="organization-links">{{ $organization->location }}</p>
                            </div>
                            </a>
                        </div>
                        @endforeach
                    @endif


        </div>
    </div>
</div>
@endsection