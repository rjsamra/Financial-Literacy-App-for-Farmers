<?php
session_start();
include './script.php';
$username = $_GET['usr'];
$wheat = $_GET['wheat'];
$cow = $_GET['cow'];
$milk = $_GET['milk'];
$coins = $_GET['c'];
$_SESSION['username'] = $username;
$_SESSION['coins'] = $coins;
$x = updateCoins($coins,$username);
$y = gameupdate($username,$wheat,$cow,$milk);
$url = "location: ../Game/marketplace.php?u=".$username."&wheat=".$wheat."&cow=".$cow."&milk=".$milk."&c=".$coins;
header($url);

 ?>
