<?php




session_start();

include 'connection.php';
if(!isset($_SESSION["userid"]))
{
	header("location:index.php");
}

$id=$_SESSION["userid"];
$result=$obj->query("select * from admin where id='$id' ");
$row=$result->fetch_object();

echo "<center><h1>Welcome,$row->name</center></h1>";



$id =  $_GET["delid"];

$exe = $obj->query("delete from city where id='$id'");

if($exe)
{
	header('location:all_city.php');
}
else
{
	"Error in code";
}









?>