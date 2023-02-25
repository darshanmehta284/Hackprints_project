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

 $result1 = $obj->query("select * from place");

  $city = $obj->query("select * from place inner join city on place.city=city.id inner join state on place.state=state.state_id inner join category on place.category=category.id");
?>



<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Places</title>
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
            <!--// top-bar -->

            <!-- main-heading -->
            <!--<h2 class="main-title-w3layouts mb-2 text-center">Tables</h2> -->
            <!--// main-heading -->

            <!-- Tables content -->
            <section class="tables-section">
                
                <!-- table2 -->
                <div class="outer-w3-agile min" align="align-self-center">
                    <h4 class="tittle-w3-agileits mb-2">All Places</h4>
                    <table class="table" align="center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" align="text-center">Id</th>
                                <th scope="col" align="text-center">Place</th>
                                <th scope="col" align="text-center">Description</th>
                                <th scope="col" align="text-center">Category</th>
                                <th scope="col" align="text-center">City</th>
                                <th scope="col" align="text-center">State</th>
                                <th scope="col" align="text-center">Image</th>
                                <th scope="col" align="text-center">View Details</th>
                                
                               

                                
                        </thead>
                        <tbody>
                            <?php
                                while($row = $result1->fetch_object())
                                {
                                   
                                    $c = $city->fetch_object();
                            ?>
                            <tr>
                            <td><?php echo $row->id;?></td>
                            <td><?php echo $row->place;?></td>
                            <td><?php echo $row->description;?></td>
                            <td><?php echo $c->category;?></td>
                            <td><?php echo $c->city;?></td>
                            <td><?php echo $c->state_name;?></td>
                            <td><img src="upload/<?php echo $row->image;?>"height="200" width="150"></td>
                            <td><a href="view_detail.php?pid=<?php echo $row->id?>">View Details</a></td>
                          

                            <?php
                                }
                            ?>
                            </tr>
                        </tbody>
                    </table>

            <br><br><br><br><br><br><br><br><br>
            <?php include'common/footer.php';?>
           
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