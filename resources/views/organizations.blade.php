
@extends('layouts.index')

@section('content')

<div class="container">
  <div class=" col-md-8 col-xs-12 ">
    <h3>Here are our featured organizations</h3>
    <div class="basic-content-container">
      <p>
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
      </p>
    </div>

    <div class="map-container" id="map">

    </div>

    <div class="basic-content-container">
        <div class="avatar-container pull-right">
          <a href="#">
            <img src="{{asset('/images/carousel.jpg')}}" class="img-responsive" />
          </a>
        </div>
      <a href="#">
        <h4>
          <span>Organization</span>
        </a>
            <small>- This is our tagline here</small>
          </h4>
      <p class="meta">
        <a class="label label-primary pull-left" href="#">Category</a> &nbsp; &nbsp;
        <a href="#"  itemprop="category">
        <i class="fa fa-map-marker"></i>
        <span  itemprop="category">Location</span>
      </a>
      </p>
      <div itemprop="description">
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, non numquam eius modi tempora incidunt
        </p>
      </div>
    </div>
    <button class="btn btn-default show-more-button">
      Show More
    </button>
  </div>
</div>

@endsection
