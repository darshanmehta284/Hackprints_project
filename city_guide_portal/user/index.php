<?php
session_start();

$obj = new mysqli("localhost","root","","city guide");
if($obj->connect_errno!=0)
{
    echo $obj->connect_error;
    exit;
}

if(isset($_POST['submit']))
{
    $email=$_POST["email"];
    $password=$_POST["password"];

            
    $result= $obj->query("select * from user where email='$email' and password='$password'");
    $rowcount=$result->num_rows;
    if($rowcount==1)
    {
        $row=$result->fetch_object();
        $id=$row->id;
        $_SESSION["userid"]=$id;
        if (isset($_POST['chk'])) 
                {
                setcookie('email',$email, time()+3600*24*1);
                setcookie('password',$password, time()+3600*24*1);
                }
                header("location:dashboard.php");
            }
            else
            {
                echo"<script>alert('Invalid Email Or Password');</script>";
            }

        }

?>





<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from demo.webtend.net/html/fioxen/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 12:04:25 GMT -->
<head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>City Guide Portal</title>
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
       
        <!--====== End Hero Section ======-->
        <!--====== Start Contact Section ======-->
        <section class="contact-section pt-115 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        
                    </div>
                </div>
                <div class="row">
                     <div class="col-lg-4">
                        <img src="images/signin-image.jpg" alt="sing up image"><br>
                     </div>
                    <div class="col-lg-8">
                        <div class="contact-wrapper-one mb-30 wow fadeInRight">
                            <div class="section-title section-title-left mb-50">
                            <span class="sub-title">Login Here</span>
                        </div>
                            <div class="contact-form">
                                <form method="post">
                                    <div class="row">
                                        
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="password" class="form_control" placeholder="Password" name="password" required>
                                            </div>
                                        </div>


                                    <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn" name="submit">Login</button>

                                            </div>

                                        </div>
                                        <a href="register.php" class="signup-image-link">Create An Account</a>


                                    </div>


                                </form>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <!--====== End Contact Section ======-->
        <!--====== Start Map section ======-->
        <!--====== End Map section ======-->
        <!--====== Start Footer ======-->
       <!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="ti-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
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
         <?php include'common/footer.php';?>




<!-- Mirrored from demo.webtend.net/html/fioxen/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 12:04:25 GMT -->
</html>
