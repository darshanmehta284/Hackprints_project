<?php

session_start();

$obj=new mysqli("localhost","root","","city guide");
if($obj->connect_errno!=0)
{
    echo $obj->connect_error;
    exit;
}

// if(!isset($_SESSION["userid"]))
// {
//     header("location:index.php");
// }

// $id=$_SESSION["userid"];


?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from demo.webtend.net/html/fioxen/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 12:02:56 GMT -->
<head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>About Us</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--====== FontAwesoem css ======-->
        <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--====== Slick css ======-->
        <link rel="stylesheet" href="assets/css/slick.css">
        <!--====== Nice-select css ======-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--====== Jquery ui css ======-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <img src="assets/images/loader.png" alt="loader">
            </div>
        </div>
        <!--====== End Preloader ======-->
        <!--====== Start Header Section ======-->
        <?php include'common/header.php';?>
        <!--====== End Header Section ======-->
        <!--====== Start Hero Section ======-->
        <section class="hero-area">
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="page-title">
                                <h1 class="title">About us</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index-2.html">Home</a></li>
                                    <li class="active">About us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section ======-->
        <!--====== Start Features Section ======-->
        <section class="features-area">
            <div class="features-wrapper-three pt-110">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center mb-60 wow fadeInUp">
                                <span class="sub-title">Some Feature</span>
                                <h2>Caring Your Hobbies</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="features-item features-item-two text-center mb-40 wow fadeInUp" data-wow-delay="10ms">
                                <div class="icon">
                                    <i class="flaticon-add-user"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">User Friendly</h3>
                                    <p>Congue men porttitor blandit erat to loborti lacinia sapien pretium disenty</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="features-item features-item-two text-center mb-40 wow fadeInDown" data-wow-delay="20ms">
                                <div class="icon">
                                    <i class="flaticon-gift-box"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Daily Offers</h3>
                                    <p>Congue men porttitor blandit erat to loborti lacinia sapien pretium disenty</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="features-item features-item-two text-center mb-40 wow fadeInUp" data-wow-delay="30ms">
                                <div class="icon">
                                    <i class="flaticon-laptop"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Quick Search</h3>
                                    <p>Congue men porttitor blandit erat to loborti lacinia sapien pretium disenty</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="features-item features-item-two text-center mb-40 wow fadeInDown" data-wow-delay="40ms">
                                <div class="icon">
                                    <i class="flaticon-headphone"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Live Support</h3>
                                    <p>Congue men porttitor blandit erat to loborti lacinia sapien pretium disenty</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Features Section ======-->
        <!--====== Start Features Section ======-->
        <section class="features-area">
            <div class="features-wrapper-four pt-80 pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="features-img wow fadeInLeft">
                                <img src="assets/images/features/123.jpg" height="600" alt="Features Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="features-content-box features-content-box-one">
                                <div class="section-title section-title-left mb-30 wow fadeInUp">
                                    <span class="sub-title">Our Speciality</span>
                                    <h2>Comprehnsive All Great
                                        Destination Here</h2>
                                </div>
                                <h5>Risus urnas Iaculis per amet vestibulum luctus.tincidunt ultricies aenean
                                    quam eros eleifend sodales cubilia mattis quam.</h5>
                                <ul class="features-list-one">
                                    <li class="list-item wow fadeInUp" data-wow-delay="10ms">
                                        <div class="icon">
                                            <i class="flaticon-find"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Find What You Want</h5>
                                            <p>Rhoncus dolor quam etiam mattis, tincidunt nec lobortis sociis
                                                facilisi aenean netus tempor duis.</p>
                                        </div>
                                    </li>
                                    <li class="list-item wow fadeInUp" data-wow-delay="20ms">
                                        <div class="icon">
                                            <i class="flaticon-place"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Easy Choose Your Place</h5>
                                            <p>Rhoncus dolor quam etiam mattis, tincidunt nec lobortis sociis
                                                facilisi aenean netus tempor duis.</p>
                                        </div>
                                    </li>
                                    <li class="list-item wow fadeInUp" data-wow-delay="30ms">
                                        <div class="icon">
                                            <i class="flaticon-social-care"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Live Online Assistance</h5>
                                            <p>Rhoncus dolor quam etiam mattis, tincidunt nec lobortis sociis
                                                facilisi aenean netus tempor duis.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta-area">
            <div class="cta-wrapper-two bg_cover b" style="background-image: url(assets/images/bg/cta-bg-2.jpg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            
                        </div>
                        <div class="col-lg-5">
                            <div class="cta-content-box wow fadeInRight">
                                <h2>Visit the Best Places</h2>
                                <p>Pharetra venenatis ante pulvinar fermentum dignissim one malesuada laoreet ridiculus fringilla quam</p>
                                <a href="dashboard.php" class="main-btn icon-btn">Visit Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Features Section ======-->
        <!--====== Start CTA Section ======-->
       
        <!--====== End CTA Section ======-->
        <!--====== Start Testimonial Section ======-->
       
        <!--====== End Testimonial Section ======-->
        <!--====== Start Newsletter Section ======-->
        
        <!--====== End Newsletter Section ======-->
        <!--====== Start Team Section ======-->
       
        <!--====== End Team Section ======-->
        <!--====== Start Footer ======-->
        <?php include'common/footer.php';?><!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="ti-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <!--====== Popper js ======-->
        <script src="assets/js/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="assets/js/slick.min.js"></script>
        <!--====== Magnific Popup js ======-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!--====== Nice-select js ======-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--====== counterup js ======-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--====== waypoints js ======-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--====== Ui js ======-->
        <script src="assets/js/jquery-ui.min.js"></script>
        <!--====== Wow js ======-->
        <script src="assets/js/wow.min.js"></script>
        <!--====== Main js ======-->
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from demo.webtend.net/html/fioxen/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 12:03:06 GMT -->
</html>