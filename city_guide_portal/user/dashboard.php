<?php

session_start();

$obj = new mysqli("localhost","root","","city guide");
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


$state = $obj->query("select * from state");
$category = $obj->query("select * from category");
//$place= $obj->query("select * from place ");

//$rowcount = 0;

if(isset($_POST['submit']))
{
    $s1=$_POST["state"];
    $c1=$_POST["ct"];
    $cat=$_POST["category"];

    $place = $obj->query("select * from place where state='$s1' and city='$c1' and category='$cat'");
  //  $rowcount = $place->num_rows;
    
}
else
{
     $place = $obj->query("select * from place order by id desc limit 6");
}


?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from demo.webtend.net/html/fioxen/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 12:02:26 GMT -->
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
        <section class="hero-area">
            <div class="hero-wrapper-three bg_cover" style="background-image: url(assets/images/hero/hero-three-bg-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-content text-center">
                                <h1 class="wow fadeInUp" data-wow-delay=".30s">Explore The Worlds</h1>
                                <h3 class="wow fadeInDown" data-wow-delay=".50s">People Don’t Take,Trips Take People</h3>
                                <div class="hero-search-wrapper wow fadeInUp"  data-wow-delay=".70s">
                                    <form method="post">
                                        
                                        <div class="hero-search-form tab-content">
                                            <div class="tab-pane fade show active">
                                                <div class="row">
                                                   <div class="col-lg-3 col-md-6">
                                                        <div class="form_group">
                                                            <select class="wide" id="st" name="state" onchange="return getct()">

                                                                <option value="">Select State</option>
                                                                <?php
                                                                    while ($row=$state->fetch_object())
                                                                {
                                                                ?>
                                                                <option value="<?php echo $row->state_id;?>"> <?php echo $row->state_name;?></option>
                                                                 <?php
                                                                     }
                                                                ?>
                                                
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="form_group">
                                                            <select id="ct" name="ct" class="xyz">
                                                                <option value="">Select City</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                   <div class="col-lg-3 col-md-6">
                                                        <div class="form_group">
                                                            <select class="wide" id="category" name="category">

                                                                <option value="">Select Category</option>
                                                                <?php
                                                                    while ($row=$category->fetch_object())
                                                                {
                                                                ?>
                                                                <option value="<?php echo $row->id;?>"> <?php echo $row->category;?></option>
                                                                 <?php
                                                                     }
                                                                ?>
                                                
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="form_group">
                                                            <button class="main-btn icon-btn" name="submit">Search Now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Hero Section ======-->
        <!--====== Start Place Section ======-->
       <!--====== End Hero Section ======-->
        <!--====== Start category Section ======-->
        <!--====== End category Section ======-->
        <!--====== Start Listing Section ======-->
         <section class="listing-grid-area light-bg pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-60 wow fadeInUp">
                            <span class="sub-title">Places</span>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
               
                    while ($row=$place->fetch_object())
                    {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                         <div class="listing-item listing-grid-item-three mb-30 wow fadeInUp" data-wow-delay=".15s">
                                <div class="listing-thumbnail">
                                    <img src="../admin/upload/<?php echo $row->image;?>" height="200" width="1000" alt="Blog Image">           
                                </div>
                                <div class="listing-content">
                                    <h3 class="title">
                                        <a href="list.php?placeid=<?php echo $row->id?>"><?php echo $row->place;?></a>
                                    </h3>
                                </div>
                            </div>
                    </div>
                    <?php
                    }
                    
                
                ?> 
            </div>
              <div class="place-slider-one wow fadeInDown">
                    <div class="place-item place-item-one">
                        <div class="place-thumbnail">
                            <img src="assets/images/place/q7.jpg" height="200" alt="Place Image">
                            
                        </div>
                    </div>
                    <div class="place-item place-item-one">
                        <div class="place-thumbnail">
                            <img src="assets/images/place/b2.jpg" height="200" alt="Place Image">
                            
                        </div>
                    </div>
                    <div class="place-item place-item-one">
                        <div class="place-thumbnail">
                            <img src="assets/images/place/p2.jpg" height="200" alt="Place Image">
                            
                        </div>
                    </div>
                    <div class="place-item place-item-one">
                        <div class="place-thumbnail">
                            <img src="assets/images/place/a4.jpg" height="200" alt="Place Image">
                            
                        </div>
                    </div>
                    <div class="place-item place-item-one">
                        <div class="place-thumbnail">
                            <img src="assets/images/place/q4.jpg" height="200" alt="Place Image">
                            
                        </div>
                    </div>
                    <div class="place-item place-item-one">
                        <div class="place-thumbnail">
                            <img src="assets/images/place/w2.jpg" height="200" alt="Place Image">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row masonry-place-row">
                    <div class="col-lg-4 col-md-6 col-sm-12 place-column">
                        <div class="place-item place-item-three mb-30 wow fadeInUp" data-wow-delay=".2s">
                            <div class="place-thumbnail">
                                <img src="assets/images/place/place-11.jpg" alt="place image">
                                <div class="place-overlay">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-column">
                        <div class="place-item place-item-three mb-30 wow fadeInUp" data-wow-delay=".25s">
                            <div class="place-thumbnail">
                                <img src="assets/images/place/place-12.jpg" alt="place image">
                                <div class="place-overlay">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-column">
                        <div class="place-item place-item-three mb-30 wow fadeInUp" data-wow-delay=".30s">
                            <div class="place-thumbnail">
                                <img src="assets/images/place/place-13.jpg" alt="place image">
                                <div class="place-overlay">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-column">
                        <div class="place-item place-item-three mb-30 wow fadeInUp" data-wow-delay=".35s">
                            <div class="place-thumbnail">
                                <img src="assets/images/place/place-14.jpg" alt="place image">
                                <div class="place-overlay">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 place-column">
                        <div class="place-item place-item-three mb-30 wow fadeInUp" data-wow-delay=".40s">
                            <div class="place-thumbnail">
                                <img src="assets/images/place/place-15.jpg" alt="place image">
                                <div class="place-overlay">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="cta-area">
            <div class="cta-wrapper-two bg_cover b" style="background-image: url(assets/images/bg/1.jpeg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            
                        </div>
                        <div class="col-lg-5">
                            <div class="cta-content-box wow fadeInRight">
                                <h2>Visit the Best Places</h2>
                                
                                <a href="dashboard.php" class="main-btn icon-btn">Visit Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Listing Section ======-->
        <!--====== Start Features Section ======-->
        <!--====== End Features Section ======-->
        <!--====== Start CTA Section ======-->
       <!--====== End CTA Section ======-->
        <!--====== Start Testimonial Section ======-->
        
        <!--====== End Testimonial Section ======-->
        <!--====== Start Client Section ======-->
        <!--====== End Client Section ======-->
        <!--====== Start Blog Section ======-->
       
        <!--====== End Blog Section ======-->
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

         <script type="text/javascript">
            

            function getct()
            {
                var state_id = $("#st").val();
                //alert(state_id);
                $.ajax({
                    type:"POST",
                    url:'ct.php',
                    data:'state_id='+state_id,
                    success:function(ans)
                    {
                         //alert(ans);

                        $('.xyz').html(ans);
                         
                         //document.getElementById('#abc').innerHTML = ans;
                    }
                });

            
            }
           

        
        </script>
       
    </body>

<!-- Mirrored from demo.webtend.net/html/fioxen/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 12:02:56 GMT -->
</html>