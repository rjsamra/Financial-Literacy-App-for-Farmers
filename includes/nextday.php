<?php
session_start();
include './script.php';
$username = $_SESSION['username'];
$wheat = $_GET['wheat'];
$cow= $_GET['cow'];
$milk = $_GET['milk'];
$update = gameupdate($username,$wheat,$cow,$milk);
if($update)
{
  if($mp == 1)
  {
    $url = "location: ../Game/marketplace.php?wheat=".$wheat."&cow=".$cow."&milk=".$milk;

  }
  else {
    $url = "location: ../Game/Farming.php?wheat=".$wheat."&cow=".$cow."&milk=".$milk;
  }
    header($url);
}







?>
