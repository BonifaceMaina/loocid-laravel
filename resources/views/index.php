<!doctype html>
<html lang="en">
<head>

    <title>Loocid</title>

    <!--     Fonts and icons     -->
    <link href="{{URL::asset('/css/bootstrap.min.css')}}">
    <link href="{{asset('/css/bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/material-kit.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">


</head>

<body class="components-page">

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
                                <img src="assets/img/loocid.png">
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
        <!-- Brand and toggle get grouped for better mobile display -->


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
</div><!-- /.container-fluid -->


<div class="wrapper">
    <!--carousel starts here-->
    <div class="header header-filter">
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
                    <img src="assets/img/carousel.jpg" alt="Carousel">
                    <div class="carousel-caption">
                        <h3></h3>
                    </div>
                </div>

                <div class="item ">
                    <img src="assets/img/carousel2.jpg" alt="Carousel2">
                    <div class="carousel-caption">
                        <h3></h3>
                    </div>
                </div>

                <div class="item">
                    <img src="assets/img/carousel3.jpg" alt="Carousel 3">
                    <div class="carousel-caption">
                        <h3></h3>
                    </div>
                </div>

                <div class="item ">
                    <img src="assets/img/carousel4.jpg" alt="Carousel 4">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="main main-raised ">
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="row-height">
                    <a href="organization.html">
                        <div class="col-xs-4">
                            <div class="column column-height"  style="background-color: beige">
                                <div class="image-container " style="background-color: white">
                                    <img src="assets/img/organizations/ngo2.jpg" class="img-responsive">

                                </div>
                                <p class="organization-links">Organization's Name</p>
                            </div>
                        </div>
                    </a>

                    <a href="organization.html">
                        <div class="col-xs-4">
                            <div class="column column-height" style="background-color:beige;">
                                <div class="image-container" style="background-color: white">
                                    <img src="assets/img/organizations/ng10.png" class="img-responsive">

                                </div>
                                <p class="organization-links">Organization's Name</p>
                            </div>
                        </div>
                    </a>


                    <a href="organization.html">
                        <div class="col-xs-4">
                            <div class="column column-height" style="background-color: beige">
                                <div class="image-container" style="background-color: white">
                                    <img src="" class="img-responsive">

                                </div>
                                <p class="organization-links">Organization's Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="row-height">
                    <a href="organization.html">
                        <div class="col-xs-4">
                            <div class="column column-height"  style="background-color: beige">
                                <div class="image-container" style="background-color: white">
                                    <img src="assets/img/organizations/ngo4.png" class="img-responsive">

                                </div>
                                <p class="organization-links">Organization's Name</p>
                                <p></p>
                            </div>
                        </div>
                    </a>

                    <a href="organization.html">
                        <div class="col-xs-4">
                            <div class="column column-height" style="background-color: beige;">
                                <div class="image-container" style="background-color:white">
                                    <img src="assets/img/organizations/ngo8.jpg" class="img-responsive">

                                </div>
                                <p class="organization-links">Organization's Name</p>
                            </div>
                        </div>
                    </a>

                    <a href="organization.html">
                        <div class="col-xs-4">
                            <div class="column column-height" style="background-color: beige">
                                <div class="image-container" style="background-color: white">
                                    <img src="assets/img/organizations/ngo9.jpg" class="img-responsive">

                                </div>
                                <p class="organization-links">Organization's Name</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<footer class="footer footer-transparent">
    <div class="container">
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



<!-- Modal Core -->


</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<script>
    var header_height;
    var fixed_section;
    var floating = false;



    $('.carousel').carousel({
        interval:3000

    })
</script>

</html>
