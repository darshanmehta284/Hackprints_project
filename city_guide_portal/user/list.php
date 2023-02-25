<?php
session_start();
$obj = new mysqli("localhost","root","","city guide");
if($obj->connect_errno!=0)
{
    echo $obj->connect_error;
        exit;
}

$user_id = $_SESSION['userid'];
    $id=$_GET["placeid"];

    $place= $obj->query("select * from place where id='$id'");

    $city = $obj->query("select * from place inner join city on place.city=city.id inner join state on place.state=state.state_id inner join category on place.category=category.id");

     $img = $obj->query("select image from images where place_id='$id'");
    $vid = $obj->query("select * from videos where place_id='$id'");
    
    $ct = $obj->query("select * from city where id='$id'");


if(isset($_POST["comment"]))
{
    $comment = $_POST["comment_post"];
    $comm_date = date("Y-m-d");
    $pid = $_POST["pid"];

    $comment_ins = $obj->query("INSERT INTO comment(comment,comment_date,place_id,user_id) VALUES('$comment','$comm_date','$pid','$user_id')");
    if($comment_ins)
    {
        header("Refresh:0");
    }
    else{
        echo "ERRROR";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from demo.webtend.net/html/fioxen/listing-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 12:03:39 GMT -->
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

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
        <!--====== Start breadcrumbs Section ======-->
        <!-- <section class="page-breadcrumbs page-breadcrumbs-two bg_cover" style="background-image: url(assets/images/bg/listing-breadcrumbs-1.jpg);"></section> -->
        <!--====== End breadcrumbs Section ======-->
        <!--====== Start Listing Details Section ======-->
        <section class="listing-details-section pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="listing-details-wrapper listing-details-wrapper-two">
                            <div class="listing-info-area mb-30 wow fadeInUp">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="listing-info-content">
                                            
                                            <?php
                                                while ($row=$place->fetch_object())
                                                {
                                                    $c = $city->fetch_object();
                                                
                                                ?>
                                            <h3 class="title"><?php echo $row->place;?></h3>
                                              
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="button">
                                            <?php 
                                                  // $count_like = $conn->query("SELECT COUNT(*) FROM likes WHERE post_id = '$get_id' and user_like=1 ");
                                                    $count_like = $obj->query("SELECT ulike from likes where place_id='$row->id' and ulike=1");
                                                    $count_dislike = $obj->query("SELECT udislike from likes where place_id='$row->id' and udislike=1");
                                                   // $count_dislike = $conn->query("SELECT * from likes WHERE post_id = '$get_id' and user_dislike=1");
                                            ?>
                                            <i class="fa fa-thumbs-up icon-btn" onclick="like_func(<?php echo $row->id; ?>)"> (<?php echo $count_like->num_rows; ?>) </i>
                                            <i class="fa fa-thumbs-down icon-btn" onclick="dislike_func(<?php echo $row->id; ?>)"> (<?php echo $count_dislike->num_rows; ?>) </i>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing-thumbnail mb-30 wow fadeInUp">
                            <img src="../admin/upload/<?php echo $row->image;?>" width="500">
                            </div>
                            <div class="listing-content mb-30 wow fadeInUp">
                                <h3 class="title" style="color: red;"><?php echo $row->place;?></h3>
                                <p><?php echo $row->description;?></p>
                               
                                
                            </div>
                            <?php
                        }
                        ?>
                           <div class="listing-gallery-box mb-30 wow fadeInUp">
                                <h4 class="title">Photo Gallery</h4>
                                <div class="gallery-slider-one">
                                    <?php
                                     while ($i=$img->fetch_object())
                                {
                                    ?>
                                    
                                    <div class="gallery-item">
                                        <img src="../admin/upload/<?php echo $i->image;?>" height="150" width="500" alt="gallery image">
                                    </div>
                                    <?php
                                }
                                ?>
                                    
                                </div>
                            </div>
                            <div class="listing-gallery-box mb-30 wow fadeInUp">
                                <h4 class="title">Videos</h4>
                                <div class="gallery-slider-one">
                                    <?php
                                     while ($v=$vid->fetch_object())
                                {
                                    ?> 
                                    <div class="gallery-item">
                                        <video controls="" width="270" height="170" autoplay="true" autobuffer="true">
                                            <source src="../admin/upload/<?php echo $v->video;?>" type=""> 
                                        </video>
                                    </div>
                                     <?php
                            }
                            ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Comments...</h3>
                                    <?php
                                        $view_comment = $obj->query("select comment.*,user.fname from comment inner join user on user.id=comment.user_id where place_id='$id' "); 
                                        while($result = $view_comment->fetch_object())
                                        {
                                            ?>
                                        <div class="form-group">
                                        <p><b class="author"><?php echo $result->fname; ?></b> &nbsp &nbsp <?php echo $result->comment_date; ?></p>
                                        <p><?php echo $result->comment; ?></p>
                                    </div><hr>
                                    <?php
                                        }
                                    ?>

                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                
                                                <span>
                                                    <form method="POST">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="5" cols="40" id="comment_post" name="comment_post" placeholder="Comment...." ></textarea>
                                                        </div>
                                                        <div class="form-group">                                          
                                                        <input type="hidden" id="pid" name="pid" value="<?php echo $id; ?>">
                                                        </div>
                                                       <div class="col-lg-3 col-md-6">
                                                        <div class="form_group">
                                                            <button class="main-btn icon-btn" id="comment" name="comment">Comment</button>
                                                        </div>
                                                    </form>
                                                </span>
                                            </button>
                                        </li>
                                        
                                    </ul>
                                    </div>
                                   
                            </div>
                           
                            
                          
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section><!--====== End Listing Details Section ======-->
        <!--====== Start Footer ======-->
       <?php include'common/footer.php';?><!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="fas fa-angle-up"></i></a>
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

        <script>
    function like_func(pid)
    {
        // const params = new URLSearchParams(window.location.search);
        // var postid = params.get('id');
        // alert(pid);
        $.ajax({
            type: 'POST',
            url: 'like.php',
            data: { p_id: pid },
            success: function(data) {
                // alert(data);
                $(document).ajaxStop(function(){
                    window.location.reload();
                });
            }
            
        });
        
    }
    function dislike_func(pid)
    {
        // alert("dislike");
        // const params = new URLSearchParams(window.location.search);
        // var postid = params.get('id');
        // alert(pid);
        $.ajax({
            type: 'POST',
            url: 'dislike.php',
            data: { p_id: pid },
            success: function(data) {
                // alert(data);
                $(document).ajaxStop(function(){
                    window.location.reload();
                });
            }
        });
    }
    

    </script>
    </body>

<!-- Mirrored from demo.webtend.net/html/fioxen/listing-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jan 2022 12:03:48 GMT -->
</html>