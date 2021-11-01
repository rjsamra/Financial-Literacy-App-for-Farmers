<?php
session_start();
include './script.php';
$username = $_GET['usr'];
$deduct = $_GET['deduct'];
$coins = getcoins($username);
$coinsx = $coins - $deduct;

$newe = updateCoins($coinsx,$username);
$_SESSION['coins'] = $coinsx;
header("location: ../home.php?msg=deducted&amt=".$coinsx);

?>
