<?php
session_start();



$sc = (int)$_GET['sc'];
$total = (int)$_GET['total'];
$pmpy = (int)$_GET['pmpy'];
$duration = (int)$_GET['t'];

include './script.php';

$username = $_SESSION['username'];
$coins = getcoins($username);
$coinsx = $coins - $pmpy;
$totalx = $total - $pmpy;
$durationx = $duration - 1;

$coined = updateCoins($coinsx,$username);
$_SESSION['coins'] = $coinsx;

if($sc == 1)
{
$sql = "  UPDATE `scheme1taken` SET `total`='$totalx', `duration`='$durationx' WHERE `username` = '$username'; ";
$querry = insertintoSql($sql);
$urlx = "location: ../schemedetails.php?sc=1&m=deduct&amt=".$totalx."&ddr=".$durationx;
header($urlx);
}
if($sc == 2)
{
$sql = " UPDATE `scheme2taken` SET `total`='$totalx', `duration`='$durationx' WHERE `username` = '$username'; ";
$querry = insertintoSql($sql);
$urlx = "location: ../schemedetails.php?m=deduct&sc=2&amt=".$totalx."&ddr=".$durationx;
header($urlx);

}
if($sc == 3)
{
$sql = "  UPDATE `scheme3taken` SET `total`='$totalx', `duration`='$durationx' WHERE `username` = '$username'; ";
$querry = insertintoSql($sql);
$urlx = "location: ../schemedetails.php?m=deduct&sc=3&amt=".$totalx."&ddr=".$durationx;
header($urlx);

}
if($sc == 4)
{
$sql = "  UPDATE `scheme4taken` SET `total`='$totalx', `duration`='$durationx' WHERE `username` = '$username'; ";
$querry = insertintoSql($sql);
$urlx = "location: ../schemedetails.php?m=deduct&sc=4&amt=".$totalx."&ddr=".$durationx;
header($urlx);
}



 ?>
