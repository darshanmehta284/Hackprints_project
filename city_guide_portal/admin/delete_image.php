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

echo "<center><h1>Welcome,$row->name</center></h1>";



$id =  $_GET["delid"];

$exe = $obj->query("delete from images where id='$id'");

if($exe)
{
	header('location:view_images.php');
}
else
{
	"Error in code";
}









?>