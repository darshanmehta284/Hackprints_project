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



$result1=$obj->query("select * from category");
$city=$obj->query("select * from city");
$state=$obj->query("select * from state");


if(isset($_POST['submit']))
{
    $place=$_POST["place"];
    $description=$_POST["description"];
    $category=$_POST["category"];
    $city=$_POST["city"];
    $state=$_POST["state"];


     $filename=$_FILES["image"]["name"];

    $f=explode(".", $filename);

    $ext=strtolower(end($f));

    $tmp=$_FILES["image"]["tmp_name"];

    $path="upload/$filename";
    if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif')
    {
        move_uploaded_file($tmp, $path);

       

    $exe=$obj->query ("insert into place(place,description,category,city,state,image) value('$place','$description','$category','$city','$state','$filename')");
    if($exe)
    {
        echo "<script>alert('place added successfully');</script>";
    }
    else
    {
        echo "error";
    }
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
    <title>City Guide Portal</title>
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
                <div class="row">
                    
            </div>
            </div>
            <!--// Three-grids -->

            
             <section class="forms-section">

                
                <div class="container-fluid">
                    <div class="row">

                        <!-- Forms-1 -->
                        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
                            <form action="#" method="post" enctype="multipart/form-data">
                                
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Enter Place</label>
                                        <div class="col-lg-12">
                                            <input class=" form-control" id="place" name="place" minlength="2" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Enter Description</label>
                                        <div class="col-lg-12">
                                           <textarea id="description" name="description" style="width: 1140px;"></textarea>
                                        </div>
                                    </div>
                                        <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Category</label>
                                        <div class="col-lg-12">
                                            
                                            <select id="category" name="category" class=" form-control">
                                                <option value="">---Select Category---</option>
                                                <?php
                                                    while ($row=$result1->fetch_object())
                                                    {
                                                ?>
                                                    <option value="<?php echo $row->id;?>"> <?php echo $row->category;?></option>
                                                <?php
                                                    }
                                                ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">State</label>
                                        <div class="col-lg-12">
                                            
                                            <select id="state" name="state" class=" form-control" onchange="getct()">
                                                <option value="">---Select State---</option>
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
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">City</label>
                                        <div class="col-lg-12">
                                            
                                            <select id="city" name="city"  class=" form-control xyz">
                                                <option value="">---Select City---</option>
                                
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Image</label>
                                        <div class="col-lg-12">
                                            <input class=" form-control" id="image" name="image" minlength="2" type="file" required="">
                                        </div>
                                    </div>
                                    

                                     <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button  id="submit" name="submit" class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-primary" type="submit">Cancel</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        <!--// Forms-1 -->
                        
                    </div>
                </div>
                
                
            </section>
             <br><br><br><br><br><br><br><br><br>
            <?php include'common/footer.php';?>
           

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
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
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
                },
                {
                    X: "7",
                    Y: 101.98
                },
                {
                    X: "8",
                    Y: 140.00
                },
                {
                    X: "9",
                    Y: 340.00
                },
                {
                    X: "10",
                    Y: 470.25
                },
                {
                    X: "11",
                    Y: 180.56
                },
                {
                    X: "12",
                    Y: 680.57
                },
                {
                    X: "13",
                    Y: 740.00
                },
                {
                    X: "14",
                    Y: 800.89
                },
                {
                    X: "15",
                    Y: 420.57
                },
                {
                    X: "16",
                    Y: 980.24
                },
                {
                    X: "17",
                    Y: 1080.00
                },
                {
                    X: "18",
                    Y: 140.24
                },
                {
                    X: "19",
                    Y: 140.58
                },
                {
                    X: "20",
                    Y: 110.54
                },
                {
                    X: "21",
                    Y: 480.00
                },
                {
                    X: "22",
                    Y: 580.00
                },
                {
                    X: "23",
                    Y: 340.89
                },
                {
                    X: "0",
                    Y: 100.26
                },
                {
                    X: "1",
                    Y: 1480.89
                },
                {
                    X: "2",
                    Y: 1380.87
                },
                {
                    X: "3",
                    Y: 1640.00
                },
                {
                    X: "4",
                    Y: 1700.00
                }
            ]
        };
        $(function () {
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
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
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
            },
            {
                country: "Ireland",
                value: 201
            },
            {
                country: "Germany",
                value: 65
            },
            {
                country: "Australia",
                value: 39
            },
            {
                country: "UK",
                value: 19
            },
            {
                country: "Latvia",
                value: 10
            }
        ];

        AmCharts.ready(function () {
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

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>

    <!-- //Js for bootstrap working -->
    <script type="text/javascript">
            

            function getct()
            {
                var state_id = $("#state").val();
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

</html>