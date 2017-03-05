<html>
<head>
    <title>Loocid</title>
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/css/font-awesome.min.css')}}">
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-header">
    <nav class="navbar navbar-fixed-top " role="navigation">
        <div class row>
            <div class="col-sm-3">
                <div class="navbar-header">
                    <button id="menu-toggle" type="button" class="navbar-toggle" data-target="#navigation-doc">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a href="#">
                        <div class="logo-container">
                            <div >
                                <img src="{{asset('/images/loocid.png')}}">
                            </div>

                        </div>
                    </a>
                </div>

            </div>
            <div class="col-sm-2 ">
                <form class="navbar-form navbar-left" role="search" method="get"action="#">
                    <div class="form-group search-input">
                        <input type="text" class="form-control" name="search" placeholder="Search for Organizations">
                    </div>
                    <!--<button type="submit" class="btn btn-default">Search</button>-->
                </form>
            </div>
            <div class="col-sm-7">
                <div class="collapse navbar-collapse" id="navigation-doc">
            <ul  class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('organization.create') }}">Create Organization</a>
                </li>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <!--<a href="#">CREATE ORGANIZATION</a> -->
                    <a href="{{ route('login') }}">Log In</a>

                </li>
                <li>
                    <a href="{{ route('register') }}"> Sign Up</a>
                </li>
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
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script>
   
        $('.carousel').carousel({
            interval: 3000


        });
</script>
</html>