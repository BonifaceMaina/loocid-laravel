<html>
<head>
    <title>Loocid</title>
    <link rel="icon" href="{{asset('/images/favicon.ico')}}" />
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/css/font-awesome.min.css')}}">
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-header">
    <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container-fluid">
                <div class="navbar-header">
                    <button  type="button" data-toggle="collapse" class="navbar-toggle" data-target="#navigation-doc">
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                        <div class="navbar-brand logo-container">
                            <a href="#">
                                  <img src="{{asset('/images/loocid.png')}}" class="img-responsive">
                            </a>
                        </div>
                </div>
            <div class="navbar-right">
                <div class="collapse navbar-collapse" id="navigation-doc">
                  <ul  class="nav navbar-nav">
                    <li>
                      <a href="{{url('organizations')}}">Organizations</a>
                    </li>
                    <li>
                      <a href="#">About Us</a>
                    </li>
                    @if (Auth::guest())
                    <li>
                      <a href="{{ route('login') }}">Log In</a>
                    </li>
                    <li>
                      <a href="{{ route('register') }}"> Register</a>
                    </li>
                    @else
                    <li>
                      <a href="{{ route('organization/create') }}"> Create Organization</a>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @endif
                  </ul>

                </div>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- /.navbar-collapse -->
    </nav>
</div>

@yield('content')

{{--footer starts here--}}

<footer class="footer">
    <div class="container">
        <div class="footer-text">
            &copy 2017 Loocid. All Rights Reserved.
            <br>
            <span>Loocid is and has always been an independent body. We strive to bring organizations closer to you, know them, contribute to their cause and make an impact in the society.</span>
        </div>
        <div class="footer-links">
            <ul>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <a href="#">Legal</a>
                </li>
                <li>
                    <a href="#">Advertise</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
                <li>
                    <a href="#">Terms of Use</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</body>
{{--scripts needed--}}
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxdpbgUDgfV5TB0ypjiyXyT2-VxlpxliI"></script>
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/script.js')}}"></script>
<script src="{{asset('/js/bootstrap.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>

<script>

        $('.carousel').carousel({
            interval: 3000


        });
</script>
</html>
