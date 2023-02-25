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

            $result= $obj->query("select * from admin where email='$email' and password='$password'");

            $rowcount=$result->num_rows;

            if($rowcount==1)
            {
                $row=$result->fetch_object();
                $id=$row->id;
                $_SESSION["userid"]=$row->id;
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
<html>
<head>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style type="text/css">
    body{
    background-color:#5286F3;
    font-size:14px;
    color:#fff;
}
.simple-login-container{
    width:400px;
    max-width:100%;
    margin:50px auto;
}
.simple-login-container h2{
    text-align:center;
    font-size:20px;
}

.simple-login-container .btn-login{
    background-color:#FF5964;
    color:#fff;
}
a{
    color:#fff;
}
</style>
</head>
<body>
    <div class="simple-login-container" style="position: relative;top:140px">
    <h1 align="center">City Guide Portal</h1>
    <br/>
    <form method="post">
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="email" name="email" class="form-control" placeholder="Username">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="password" name="password" placeholder="Enter your Password" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="submit" name="submit" class="btn btn-block btn-login" value="Login" >
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
           <!--  <a href="https://1.envato.market/ydVvD">Download Best Theme</a> -->
        </div>
    </div>
</div>
</form>
</body>
</html>