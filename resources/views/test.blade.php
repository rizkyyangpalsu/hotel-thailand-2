
<!-- end nav -->

<!--<section>-->
<!--    <div class="slider">-->
<!--        -->
<!--        <video src="assets/video/banner.mp4" class="video" style="width: 100%;" muted loop autoplay></video>-->
<!--    </div>-->
<!--</section>-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smesa Hotel - SMK Negeri 1 Surabaya</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <!-- Venobox -->
    <link rel="stylesheet" href="{{url('css/venobox.css')}}">

    <!-- fonts -->
    <link href="{{url('fonts/font-awesome/css/fontawesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="fonts/flaticon/css/flaticon.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900" rel="stylesheet">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>

<!--Preload-->
<div class="preloader">
    <div class="preloader_image">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <a class="navbar-brand" href="./">
            <h1>SMEAS <span style="color:#2881a3;">HOTEL</span></h1>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="inner-page-banner">
    <video src="{{url('assets/video/banner.mp4')}}" class="video" style="height: 450px;float: right;" muted loop autoplay></video>
    <img src="{{url('assets/images/banner-empty.png')}}" style="position: absolute;height: 450px;" height="450">
    <div class="banner-caption">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-text">
                        <h6 class="animated fadeInLeft">Consetetur Adipiscing</h6>
                        <h1 class="animated fadeInLeft">Best Hotel</h1>
                        <p class="animated fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum tincidunt ullamcorper magna, in tincidunt ex auctor et.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end banner -->

<section class="section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><span>Our Services</span></h2>
                    <p>Decorated room, proper air conditioned Private balcony</p>
                    <p> 24 hours room service

                        24-hour Concierge service </p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeIn">
                    <div class="icon">
                        <i class="flaticon-slumber"></i>
                    </div>
                    <h3>Master Bedrooms</h3>
                    <p>The special charm and the cosy mood of Cellai will make you feel as a true fiorentine in
                        Florence.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeIn">
                    <div class="icon">
                        <i class="flaticon-play-button"></i>
                    </div>
                    <h3>Playground</h3>
                    <p>Modern playgrounds often have recreational equipment such as the seesaw, merry-go-round,
                        swingset.</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="service-item text-center wow fadeIn">
                    <div class="icon">
                        <i class="flaticon-house"></i>
                    </div>
                    <h3>Sea View Balcon</h3>
                    <p>his luxury room has a signature wide terrace with amazing views of the Sorrento bay and
                        sunsets.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end services -->

<!--<section class="section-spacing inverse-bg">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="section-title text-center">-->
<!--                    <h2><span>Featured tours</span></h2>-->
<!--                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing Suscipit votas aperiam Sorem ipsum dolor consectur adipisicing elit.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-md-12 col-lg-12 col-xl-6">-->
<!--                <div class="tour-item wow fadeIn">-->
<!--                    <div class="thumb">-->
<!--                        <a href="tour-single.html">-->
<!--                            <img src="img/tour/1.jpg" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="tour-info">-->
<!--                        <h3><a href="tour-single.html">Week at Sunny Beach</a></h3>-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing Suscipit tas aperiam Sorem ipsum dolor consectur adipisicing. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>-->
<!--                        <div class="tour-price">$650.00 <small>- 2 days 3 nights</small></div>-->
<!--                        <div class="tour-location"><span>Tour in Croatia</span></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-12 col-lg-12 col-xl-6">-->
<!--                <div class="tour-item wow fadeIn">-->
<!--                    <div class="media">-->
<!--                        <div class="thumb">-->
<!--                            <a href="tour-single.html">-->
<!--                                <img src="img/tour/2.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <div class="tour-info">-->
<!--                                <h3><a href="tour-single.html">Week at Sunny Beach</a></h3>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing Suscipit tas aperiam.</p>-->
<!--                                <div class="tour-price">$550.00 <small>- 2 days 3 nights</small></div>-->
<!--                                <div class="tour-location"><span>Tour in Istanbul</span></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="tour-item wow fadeIn">-->
<!--                    <div class="media">-->
<!--                        <div class="thumb">-->
<!--                            <a href="tour-single.html">-->
<!--                                <img src="img/tour/3.jpg" alt="">-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <div class="tour-info">-->
<!--                                <h3><a href="tour-single.html">Week at Sunny Beach</a></h3>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing Suscipit tas aperiam.</p>-->
<!--                                <div class="tour-price">$950.00 <small>- 2 days 3 nights</small></div>-->
<!--                                <div class="tour-location"><span>Tour in Sydney</span></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- end featured tour -->

<!--<section class="section-spacing">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="section-title text-center">-->
<!--                    <h2><span>Popular Destination</span></h2>-->
<!--                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing Suscipit votas aperiam Sorem ipsum dolor consectur adipisicing elit.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-md-12 col-lg-6">-->
<!--                <div class="destination-item wow fadeIn">-->
<!--                    <a href="destination-single.html">-->
<!--                        <img src="img/destination/1.jpg" alt="">-->
<!--                        <div class="destination-info">-->
<!--                            <h2>Croatia</h2>-->
<!--                            <h3>120+ Tours</h3>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-12 col-lg-6">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="destination-item wow fadeIn">-->
<!--                            <a href="destination-single.html">-->
<!--                                <img src="img/destination/2.jpg" alt="">-->
<!--                                <div class="destination-info">-->
<!--                                    <h2>Italy</h2>-->
<!--                                    <h3>35+ Tours</h3>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="destination-item wow fadeIn">-->
<!--                            <a href="destination-single.html">-->
<!--                                <img src="img/destination/3.jpg" alt="">-->
<!--                                <div class="destination-info">-->
<!--                                    <h2>Istanbul</h2>-->
<!--                                    <h3>50+ Tours</h3>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-md-12 col-lg-6">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="destination-item wow fadeIn">-->
<!--                            <a href="destination-single.html">-->
<!--                                <img src="img/destination/4.jpg" alt="">-->
<!--                                <div class="destination-info">-->
<!--                                    <h2>Singapore</h2>-->
<!--                                    <h3>35+ Tours</h3>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="destination-item wow fadeIn">-->
<!--                            <a href="destination-single.html">-->
<!--                                <img src="img/destination/5.jpg" alt="">-->
<!--                                <div class="destination-info">-->
<!--                                    <h2>Sydney</h2>-->
<!--                                    <h3>50+ Tours</h3>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col-md-12 col-lg-6">-->
<!--                <div class="destination-item wow fadeIn">-->
<!--                    <a href="destination-single.html">-->
<!--                        <img src="img/destination/6.jpg" alt="">-->
<!--                        <div class="destination-info">-->
<!--                            <h2>Dubai</h2>-->
<!--                            <h3>120+ Tours</h3>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="text-center mt-40">-->
<!--                    <a href="destinations.html" class="btn btn-primary">All Destinations</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</section>-->
<!-- end destination -->

<section class="section-spacing bottom-none inverse-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><span>Gallery</span></h2>
                    <p>Some Photos from our Hotel
                        .</p>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-outer">
        <ul class="gallery-items">
            <li class="filtr-item" data-category="1">
                <div class="gallery-inner">
                    <img src="assets/images/g1.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g1.jpg" class="venobox" data-gall="gallery"><i
                                    class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="3">
                <div class="gallery-inner">
                    <img src="assets/images/g2.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g2.jpg" class="venobox" data-gall="gallery"><i
                                    class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="2">
                <div class="gallery-inner">
                    <img src="assets/images/g3.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g3.jpg" class="venobox" data-gall="gallery"><i
                                    class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="5">
                <div class="gallery-inner">
                    <img src="assets/images/g4.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g4.jpg" class="venobox" data-gall="gallery"><i
                                    class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="2">
                <div class="gallery-inner">
                    <img src="assets/images/g5.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g5.jpg" class="venobox" data-gall="gallery"><i
                                    class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="4">
                <div class="gallery-inner">
                    <img src="assets/images/g6.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g6.jpg" class="venobox" data-gall="gallery"><i
                                    class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="5">
                <div class="gallery-inner">
                    <img src="assets/images/g7.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g7.jpg" class="venobox" data-gall="gallery"><i
                                    class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="2">
                <div class="gallery-inner">
                    <img src="assets/images/g8.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g8.jpg" class="venobox" data-gall="gallery"><i
                                    class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- end gallery -->

<section class="section-spacing inverse-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><span>Room and Rates</span></h2>
                    <p>Relaxed and effortlessly luxurious, Rosedon’s bedrooms are individually decorated so no two are
                        exactly alike. That's because they've been lovingly designed by artist Lee K. Petty, one of
                        Rosedon's owners and Creative Director.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-6">
                <div class="hotel-item wow fadeIn">
                    <div class="media">
                        <div class="thumb">
                            <a href="deluxe-room.php">
                                <img src="assets/images/r1.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="hotel-info">
                                <h3><a href="deluxe-room.php">Deluxe Room</a></h3>
                                <p>These Deluxe Rooms let you relax as you admire a beautiful view of the pool. Stay
                                    connected as you enjoy our free WiFi and watch movies with our 32-inch LCD TV and
                                    DVD player.

                                </p>
                                <div class="hotel-price">$320.00
                                    <small>- Per Night</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hotel-item wow fadeIn">
                    <div class="media">
                        <div class="thumb">
                            <a href="hotel-single.html">
                                <img src="assets/images/r2.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="tour-info">
                                <h3><a href="hotel-single.html">Luxury Room</a></h3>
                                <p>These Deluxe Rooms let you relax as you admire a beautiful view of the pool. Stay
                                    connected as you enjoy our free WiFi and watch movies with our 32-inch LCD TV and
                                    DVD player.

                                </p>
                                <div class="hotel-price">$220.00
                                    <small>- Per Night</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 col-xl-6">
                <div class="hotel-item wow fadeIn">
                    <div class="media">
                        <div class="thumb">
                            <a href="hotel-single.html">
                                <img src="assets/images/r3.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="tour-info">
                                <h3><a href="hotel-single.html">Guest House</a></h3>
                                <p>These Guest Rooms let you relax as you admire a beautiful view of the pool. Stay
                                    connected as you enjoy our free WiFi and watch movies with our 32-inch LCD TV and
                                    DVD player.

                                </p>
                                <div class="hotel-price">$180.00
                                    <small>- Per Night</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hotel-item wow fadeIn">
                    <div class="media">
                        <div class="thumb">
                            <a href="hotel-single.html">
                                <img src="assets/images/r4.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="tour-info">
                                <h3><a href="hotel-single.html">Single Room</a></h3>
                                <p>These Single Rooms let you relax as you admire a beautiful view of the pool. Stay
                                    connected as you enjoy our free WiFi and watch movies with our 32-inch LCD TV and
                                    DVD player.

                                </p>
                                <div class="hotel-price">$150.00
                                    <small>- Per Night</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end f
eatured hotels -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>About Us</h3>
                        <p>S M K N 1 S U R A B A Y A</p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="tours.html">Tours</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Contact Info</h3>
                        <ul>
                            <li><i class="fa fa-send" aria-hidden="true"></i> JL smea No 3 Surabaja</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +880 17980XXXXX</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@example.com</li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i> Fax : 02 9635 0247</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Business hour</h3>
                        <ul class="bussiness-hour">
                            <li>Monday-Friday: <span class="pull-right">9am - 5pm.</span></li>
                            <li>Saturday: <span class="pull-right">10am - 2pm.</span></li>
                            <li>Sunday: <span class="pull-right">Closed.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="copyright">
                        <p>Copyright &copy; 2018. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <ul class="social-icons pull-right">
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bact to top -->
<div class="back-top">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>


<script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.5/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.5/plugins/jquery.lazy.av.min.js"></script>
<script src="{{ url('js/popper.min.js')}}"></script>
<script src="{{ url('js/bootstrap.min.js')}}"></script>
<script src="{{ url('js/jquery.easing.min.js')}}"></script>
<script src="{{ url('js/wow.js')}}"></script>
<script src="{{ url('js/venobox.min.js')}}"></script>
<script src="{{ url('js/SmoothScroll.js')}}"></script>
<script src="{{ url('js/jquery.filterizr.min.js')}}"></script>
<script src="{{ url('js/sticky-kit.min.js')}}"></script>
<script src="{{ url('js/form-validator.min.js')}}"></script>
<script src="{{ url('js/contact-form-script.js')}}"></script>
<script src="{{ url('js/script.js')}}"></script>
<script>
    jQuery(function ($) {
        $("video").lazy();
    })
</script>
</body>
</html>
