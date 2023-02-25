<?php

session_start();


$obj = new mysqli("localhost","root","","city guide");
if($obj->connect_errno!=0)
{
    echo $obj->connect_error;
    exit;
}


if(!isset($_SESSION["userid"]))
{
    header("location:index.php");
}

$id=$_SESSION["userid"];
$result=$obj->query("select * from admin where id='$id' ");
$row=$result->fetch_object();

// echo "<center><h1>Welcome,$row->name</center></h1>";

//echo '<pre>';
//print_r($obj);

if(isset($_POST['submit']))
{
    $oldpassword=$_POST["oldpassword"];
    $newpassword=$_POST["newpassword"];
    $cpassword=$_POST["cpassword"];

    $oldpassword1=($_POST["oldpassword"]);
    $newpass1=($_POST["newpassword"]);


        $exe=$obj->query("select * from admin where id='$id' and password='$oldpassword1'");
        $rowcount=$exe->num_rows;
        if($rowcount==1)
        {
            if ($newpassword==$cpassword)
            {
                $obj->query("update admin set password='$newpass1' where id='$id'");
                header("location:dashboard.php");
            }
            else
            {
                echo "<script>alert('Missmatch password');</script>";
            }
        }
        else
        {
            echo "<script>alert('old password not mathched');</script>";
        }
    
    }

?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Forms :: w3layouts</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php include'common/sidebar.php';?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
           <?php include'common/topbar.php';?>
            <!--// top-bar -->

            <!-- main-heading -->
            <h4 class="main-title-w3layouts mb-2 text-center">Change Password</h4>
            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">

                
                <div class="container-fluid">
                    <div class="row">

                        <!-- Forms-1 -->
                        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
                            <!-- <h4 class="tittle-w3-agileits mb-4">Change Password</h4> -->
                            <form action="#" method="post">
                                
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="oldpassword" class="form-control" id="inputPassword3" placeholder="Password" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="newpassword" class="form-control" id="inputPassword3" placeholder="Password" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="cpassword" class="form-control" id="inputPassword3" placeholder="Password" required="">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-10" align="center">
                                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--// Forms-1 -->
                        
                    </div>
                </div>
            </section>

            <!--// Forms content -->

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Validation Script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!--// Validation Script -->

    <!-- dropdown nav -->
   <?php include'common/footer.php';?>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>