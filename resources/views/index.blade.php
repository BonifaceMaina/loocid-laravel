@extends('layouts.index')

@section('content')

    {{--carousel starts here--}}
    <div class="carousel-class">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
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
              <div class="header-div">                
                <h4>
                  <i class="fa fa-bg fa-info-circle bg-3">
                  </i>Featured Organizations
                  <a class="btn btn-primary pull-right" title="Join Loocid Today!" href={{route('organization.create')}}>
                    <i class="fa fa-fw fa-user-add"></i>Get Featured
                  </a>
                </h4>
              </div>
                    @if($organizations)
                    <?php $count=0; ?>
                    @if ($count=0 or is_int($count%3))
                    <div class="row">
                      @endif
                        @foreach($organizations as $organization)
                            <div class="col-xs-12 col-sm-4">
                                    <div class="column column-height">
                                        <div class="image-container">
                                           <a href="{{ route('organization.show', $organization['id']) }}">
                                             <img src="{{ $organization->photo ? URL::to($organization->photo->image_path) : 'http://placehold.it/200x200'}}" class="img-responsive">
                                           </a>
                                           <h4>
                                             <a href="{{ route('organization.show', $organization['id']) }}">{{ $organization->name }}</a>
                                          </h4>
                                         </div>
                                           <p>
                                             Lorem ipsum dolor
                                           </p>
                                         <span class="text-muted">
                                            <a href="#">
                                              <i class="fa fa-fw fa-tags"></i>
                                              Category
                                            </a>
                                         </span>
                                           <span class="text-muted">
                                             <a href="#" class="pull-right meta" title="View all organizations in {{$organization->location}}">
                                             <i class="fa fa-fw fa-map-marker">
                                             </i>
                                             {{ $organization->location }}
                                           </a>
                                           </span>
                                    </div>
                            </div>
                        @endforeach
                    @if ($count=0 or is_int($count%3))
                </div>
              @endif
              <?php $count++; ?>
              @endif
            </div>
        </div>
    </div>
@endsection
