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

// echo "<center><h1>Welcome,$row->fname $row->lname</center></h1>";


$id =  $_GET["delid"];

$exe = $obj->query("delete from place where id='$id'");

if($exe)
{
	header('location:all_place.php');
}
else
{
	"Error in code";
}









?>