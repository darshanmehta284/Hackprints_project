<?php
$obj=new mysqli("localhost","root","","city guide");
if($obj->connect_errno!=0)
{
    echo $obj->connect_error;
    exit;
}
//echo '<pre>';
//print_r($obj);

// if(!isset($_SESSION["userid"]))
// {
//     header("location:index.php");
// }

// $id=$_SESSION["userid"];


if(isset($_POST['submit']))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
    

   $exe=$obj->query ("insert into inquiry(fname,lname,phone,email,subject,message)values('$fname','$lname','$phone','$email','$subject','$message')");
    
        if ($exe)
        {
            echo "<script>alert('Submitted Successfully');</script>";
        }
        else
        {
            echo "<script>alert('Error');</script>";
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
        <title>Contact</title>
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
        <?php include'common/header.php'?>
        <!--====== End Header Section ======-->
        <!--====== Start Hero Section ======-->
       
        <!--====== End Hero Section ======-->
        <!--====== Start Contact Section ======-->
        <section class="contact-section pt-115 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section-title section-title-left mb-50">
                            <span class="sub-title">Contact With Us</span>
                            <h2>How Can We Help You</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-information-list">
                            <div class="information-item mb-30 wow fadeInUp">
                                <div class="icon">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div class="info">
                                    <h5>Address</h5>
                                    <p>46 suvastu arcade 3rd Floor
                                        palace road, London.</p>
                                </div>
                            </div>
                            <div class="information-item mb-30 wow fadeInUp">
                                <div class="icon">
                                    <i class="ti-mobile"></i>
                                </div>
                                <div class="info">
                                    <h5>Phone</h5>
                                    <p><a href="tel:445555552580">44 (555) 555 2580</a></p>
                                    <p><a href="tel:445555552580">31 (555) 222 2560</a></p>
                                </div>
                            </div>
                            <div class="information-item mb-30 wow fadeInUp">
                                <div class="icon">
                                    <i class="ti-email"></i>
                                </div>
                                <div class="info">
                                    <h5>Email</h5>
                                    <p><a href="https://demo.webtend.net/cdn-cgi/l/email-protection#eb82858d84ab8d8284938e85d9dbc5888486"><span class="__cf_email__" data-cfemail="127b7c747d52747b7d6a777c20223c717d7f">[email&#160;protected]</span></a></p>
                                    <p><a href="https://demo.webtend.net/cdn-cgi/l/email-protection#bbd2d5ddd4fbddd2d4c3ded5898b95d8d4d6"><span class="__cf_email__" data-cfemail="fe97909891be989791869b90ccccd09d9193">[email&#160;protected]</span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-wrapper-one mb-30 wow fadeInRight">
                            <div class="contact-form">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="First Name" name="fname" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Last Name" name="lname" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Phone" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Subject" name="subject" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <textarea class="form_control" placeholder="Your Message" name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn" name="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
    <<?php include'common/footer.php';?>

<!-- Mirrored from demo.webtend.net/html/fioxen/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 12:04:25 GMT -->
</html>