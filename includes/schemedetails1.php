<?php
session_start();
$_SESSION['temp']= "disabled"; 
$username = $_SESSION['username'];
include './script.php';
$sc = $_GET['sc'];
$sc = (int)$sc;
if($sc == 1)
{
  $sql = "SELECT * FROM `scheme1taken` WHERE `username`='$username';";
  $check1 = searchWhere($sql);
  if($check1 == "Nullify"){
    $url = "location: ../schemedetails.php?sc=1&u=".$username;
  }
  else {
    $total = $check1['total'];
    $pmpy = $check1['permonth'];
    $duration = $check1['duration'];
	$_SESSION['temp'] = "";
    $url = "location: ../schemedetails.php?m=exist&amtx=".$total."&tx=".$duration."&sc=1";
  }
}
elseif($sc == 2)
{
  $sql = "SELECT * FROM `scheme2taken` WHERE `username`='$username';";
  $check = searchWhere($sql);
  if($check == "Nullify"){
    $url = "location: ../schemedetails.php?sc=2";
  }
  else {
    $total = $check['total'];
    $pmpy = $check['pmpy'];
    $duration = $check['duration'];
		$_SESSION['temp'] = "";

    $url = "location: ../schemedetails.php?m=exist&amtx=".$total."&tx=".$duration."&sc=2";
  }
}
elseif($sc == 3)
{
  $sql = "SELECT * FROM `scheme1taken` WHERE `username`='$username';";
  $check = searchWhere($sql);
  if($check == "Nullify"){
    $url = "location: ../schemedetails.php?sc=3";
  }
  else {
    $total = $check['total'];
    $pmpy = $check['pmpy'];
    $duration = $check['duration'];
		$_SESSION['temp'] = "";

    $url = "location: ../schemedetails.php?m=exist&amtx=".$total."&tx=".$duration."&sc=3";
  }
}
elseif($sc == 4)
{
  $sql = "SELECT * FROM `scheme1taken` WHERE `username`='$username';";
  $check = searchWhere($sql);
  if($check == "Nullify"){
    $url = "location: ../schemedetails.php?sc=4";
  }
  else {
    $total = $check['total'];
    $pmpy = $check['pmpy'];
    $duration = $check['duration'];
		$_SESSION['temp'] = "";

    $url = "location: ../schemedetails.php?m=exist&amt=".$total."&t=".$duration."&sc=4";
  }
}
else {

}
header($url);
 ?>
