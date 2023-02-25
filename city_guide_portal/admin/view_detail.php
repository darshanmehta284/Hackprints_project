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

$ide=$_GET["pid"];


// $p = $obj->query("select * from place where id='$ide'");
// $result1 = $obj->query("select * from place");

$p = $obj->query("select * from place inner join city on place.city=city.id inner join state on place.state=state.state_id inner join category on place.category=category.id inner join images on place.id=images.place_id where place.id='$ide'");

$place = $p->fetch_object();

?>
  
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>City Guide Portal</title>
        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script>
        addEventListener("load", function() {
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
        <!-- Bars Css -->
        <link rel="stylesheet" href="css/bar.css">
        <!--// Bars Css -->
        <!-- Calender Css -->
        <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
        <!--// Calender Css -->
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
        <style type="text/css">
        .emp-profile {
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
        
        .profile-img {
            text-align: center;
        }
        
        .profile-img img {
            width: 70%;
            height: 100%;
        }
        
        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }
        
        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }
        
        .profile-head h5 {
            color: #333;
        }
        
        .profile-head h6 {
            color: #0062cc;
        }
        
        .profile-edit-btn {
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }
        
        .proile-rating {
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }
        
        .proile-rating span {
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }
        
        .profile-head .nav-tabs {
            margin-bottom: 5%;
        }
        
        .profile-head .nav-tabs .nav-link {
            font-weight: 600;
            border: none;
        }
        
        .profile-head .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 2px solid #0062cc;
        }
        
        .profile-work {
            padding: 14%;
            margin-top: -15%;
        }
        
        .profile-work p {
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }
        
        .profile-work a {
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }
        
        .profile-work ul {
            list-style: none;
        }
        
        .profile-tab label {
            font-weight: 600;
        }
        
        .profile-tab p {
            font-weight: 600;
            color: #0062cc;
        }
        </style>
        <div class="se-pre-con"></div>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <?php include'common/sidebar.php';?>
                <!-- Page Content Holder -->
                <div id="content">
                    <!-- top-bar -->
                    <?php include'common/topbar.php';?>
                        <!--// top-bar -->
                        <div class="container-fluid">
                            <div class="row"> </div>
                        </div>
                        <!--// Three-grids -->
                        <div class="container emp-profile">
                           
                            <div class="col-md-9">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 style="color: red;"> <?php echo $place->place;?> </h3>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6"> <img src="upload/<?php echo $place->image;?>" height="200" width="300"> </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php echo $place->description;?>
                                        </div>
                                    </div>
                                    <br><br>
                                     <div class="row">
                                         <div class="col-md-2" style="color: blue; padding-right:50px;">
                                                <label>Category:</label>
                                            </div>

                                        <div class="col-md-4">
                                            <?php echo $place->category;?>
                                        </div>
                                    </div>
                                    <br><br> <div class="row">
                                         <div class="col-md-2" style="color: blue; padding-right:50px;">
                                                <label>City:</label>
                                            </div>

                                        <div class="col-md-4">
                                            <?php echo $place->city;?>
                                        </div>
                                    </div>
                                    <br><br>
                                     <div class="row">
                                         <div class="col-md-2" style="color: blue; padding-right:50px;">
                                                <label>State:</label>
                                            </div>

                                        <div class="col-md-4">
                                            <?php echo $place->state_name;?>
                                        </div>
                                    </div>
                                    <br><br>
                                      

                                    <button style="color: white;" class="btn btn-primary"><a href="view_images.php?imageid=<?php echo $place->place_id;?>">Add Images</a></button>
                                    <button style="color: white;" class="btn btn-primary"><a href="all_video.php?pid=<?php echo $place->place_id;?>">Add Videos</a></button>
                                        <a href="edit_place.php?editid=<?php echo $_GET['pid'];?>" class="btn btn-success">Edit</a>
                            <a href="delete_place.php?delid=<?php echo $_GET['pid'];?>" class="btn btn-danger">Delete</a>


                        
                                    </div>
                               
                            </div>
                        </div>
                                <?php include'common/footer.php';?>

                </div>
        </div>
        </div>
            </div>
            </div>
            </div>
            <!-- Required common Js -->
            <script src='js/jquery-2.2.3.min.js'></script>
            <!-- //Required common Js -->
            <!-- loading-gif Js -->
            <script src="js/modernizr.js"></script>
            <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
            </script>
            <!--// loading-gif Js -->
            <!-- Sidebar-nav Js -->
            <script>
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
            </script>
            <!--// Sidebar-nav Js -->
            <!-- Graph -->
            <script src="js/SimpleChart.js"></script>
            <script>
            var graphdata4 = {
                linecolor: "Random",
                title: "Thursday",
                values: [{
                    X: "6",
                    Y: 300.00
                }, {
                    X: "7",
                    Y: 101.98
                }, {
                    X: "8",
                    Y: 140.00
                }, {
                    X: "9",
                    Y: 340.00
                }, {
                    X: "10",
                    Y: 470.25
                }, {
                    X: "11",
                    Y: 180.56
                }, {
                    X: "12",
                    Y: 680.57
                }, {
                    X: "13",
                    Y: 740.00
                }, {
                    X: "14",
                    Y: 800.89
                }, {
                    X: "15",
                    Y: 420.57
                }, {
                    X: "16",
                    Y: 980.24
                }, {
                    X: "17",
                    Y: 1080.00
                }, {
                    X: "18",
                    Y: 140.24
                }, {
                    X: "19",
                    Y: 140.58
                }, {
                    X: "20",
                    Y: 110.54
                }, {
                    X: "21",
                    Y: 480.00
                }, {
                    X: "22",
                    Y: 580.00
                }, {
                    X: "23",
                    Y: 340.89
                }, {
                    X: "0",
                    Y: 100.26
                }, {
                    X: "1",
                    Y: 1480.89
                }, {
                    X: "2",
                    Y: 1380.87
                }, {
                    X: "3",
                    Y: 1640.00
                }, {
                    X: "4",
                    Y: 1700.00
                }]
            };
            $(function() {
                $("#Hybridgraph").SimpleChart({
                    ChartType: "Hybrid",
                    toolwidth: "50",
                    toolheight: "25",
                    axiscolor: "#E6E6E6",
                    textcolor: "#6E6E6E",
                    showlegends: false,
                    data: [graphdata4],
                    legendsize: "140",
                    legendposition: 'bottom',
                    xaxislabel: 'Hours',
                    title: 'Weekly Profit',
                    yaxislabel: 'Profit in $'
                });
            });
            </script>
            <!--// Graph -->
            <!-- Bar-chart -->
            <script src="js/rumcaJS.js"></script>
            <script src="js/example.js"></script>
            <!--// Bar-chart -->
            <!-- Calender -->
            <script src="js/moment.min.js"></script>
            <script src="js/pignose.calender.js"></script>
            <script>
            //<![CDATA[
            $(function() {
                $('.calender').pignoseCalender({
                    select: function(date, obj) {
                        obj.calender.parent().next().show().text('You selected ' + (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) + '.');
                    }
                });
                $('.multi-select-calender').pignoseCalender({
                    multiple: true,
                    select: function(date, obj) {
                        obj.calender.parent().next().show().text('You selected ' + (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) + '~' + (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) + '.');
                    }
                });
            });
            //]]>
            </script>
            <!--// Calender -->
            <!-- profile-widget-dropdown js-->
            <script src="js/script.js"></script>
            <!--// profile-widget-dropdown js-->
            <!-- Count-down -->
            <script src="js/simplyCountdown.js"></script>
            <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
            <script>
            var d = new Date();
            simplyCountdown('simply-countdown-custom', {
                year: d.getFullYear(),
                month: d.getMonth() + 2,
                day: 25
            });
            </script>
            <!--// Count-down -->
            <!-- pie-chart -->
            <script src='js/amcharts.js'></script>
            <script>
            var chart;
            var legend;
            var chartData = [{
                country: "Lithuania",
                value: 260
            }, {
                country: "Ireland",
                value: 201
            }, {
                country: "Germany",
                value: 65
            }, {
                country: "Australia",
                value: 39
            }, {
                country: "UK",
                value: 19
            }, {
                country: "Latvia",
                value: 10
            }];
            AmCharts.ready(function() {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "country";
                chart.valueField = "value";
                chart.outlineColor = "";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                // this makes the chart 3D
                chart.depth3D = 20;
                chart.angle = 30;
                // WRITE
                chart.write("chartdiv");
            });
            </script>
            <!--// pie-chart -->
            <!-- dropdown nav -->
            <!-- //dropdown nav -->
            <!-- Js for bootstrap working-->
            <script src="js/bootstrap.min.js"></script>
            <!-- //Js for bootstrap working -->
    </body>

    </html>