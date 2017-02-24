<html>
<head>
    <title>Loocid</title>
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">
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
            <div class="col-sm-5 ">
                <form class="navbar-form navbar-left" role="search" method="get"action="#">
                    <div class="form-group search-input">
                        <input type="text" class="form-control" name="search" placeholder="Search for Organizations">
                    </div>
                    <!--<button type="submit" class="btn btn-default">Search</button>-->
                </form>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-doc">
            <ul  class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">Categories</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <!--<a href="#">CREATE ORGANIZATION</a> -->
                    <a href="#">Create Organizations</a>

                </li>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </nav>
</div>

@yield('content')

{{--footer starts here--}}

<footer>
    <div >
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="loocid.org">
                        Loocid
                    </a>
                </li>
                <li>
                    <a href="loocid.org/about">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="loocid.org/blog">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="social-area pull-right">
            <a class="btn btn-social btn-twitter btn-simple" href="https://twitter.com/Loocid">
                <i class="fa fa-twitter"></i>
            </a>
            <a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/Loocid">
                <i class="fa fa-facebook-square"></i>
            </a>
            <a class="btn btn-social btn-google btn-simple" href="https://plus.google.com/+Loocid">
                <i class="fa fa-google-plus"></i>
            </a>
        </div>
        <div class="copyright">
            &copy; 2017 Loocid, made with love
        </div>
    </div>
</footer>
</body>
{{--scripts needed--}}
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script>
    $function()
    {

        $('.carousel').carousel({
            interval: 3000


        })
    }
</script>
</html>