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
$raw=$result->fetch_object();

// echo "<center><h1>Welcome,$row->name</center></h1>";

$ide = $_GET["pid"];

// $result1 = $obj->query("select * from videos");
$v = $obj->query("select videos.id,videos.place_id,videos.video,place.place from videos inner join place on videos.place_id=place.id where place.id='$ide'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Tables :: w3layouts</title>
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
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu m">
                                <div class="profile d-flex mr-o">
                                    
                                    
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php">Logout</a>
                            </div>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="changepass.php">Chnage Password</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

           <!-- Tables content -->
            <section class="tables-section">
                
                <!-- table2 -->
                <div class="outer-w3-agile min" align="align-self-center">
                    <h4 class="tittle-w3-agileits mb-2">All Videos</h4>
                    <table class="table" align="center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" align="text-center">Id</th>
                                <th scope="col" align="text-center">place</th>
                                <th scope="col" align="text-center">video</th>
                                <th scope="col" align="text-center">Edit</th>
                                <th scope="col" align="text-center">Delete</th>

                                
                        </thead>
                        <tbody>
                            <?php
                                while($r = $v->fetch_object())
                                {
                            ?>
                             <tr>
                             <td><?php echo $r->id;?></td>
                            <td><?php echo $r->place;?></td>
                           
                            <td> <video controls="" width="270" height="170" autoplay="true" autobuffer="true">
                                            <source src="upload/<?php echo $r->video;?>" type=""> 
                                        </video></td>
                           
                            <td><a href="edit_video.php?editid=<?php echo $r->id;?>">Edit</a></td>
                            <td><a href="delete_video.php?delid=<?php echo $r->id;?>">Delete</a></td>

                            <?php
                                }
                            ?>
                            </tr>
                        </tbody>
                    </table>
       

            <!--// Tables content -->

            <!-- Copyright -->
            <?php include'common/footer.php';?>
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

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>