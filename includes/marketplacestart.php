<?php
session_start();
$username =  $_SESSION['username'];
include './script.php';
$coins = getcoins($username);
$sql = "SELECT * FROM `gamedata` WHERE `username` = '$username'; ";
$game = searchWhere($sql);
if($game != 'Nullify')
{
  $wheat = $game['wheat'];
  $cow = $game['cow'];
  $milk = $game['milk'];
}
$url = "location: ../Game/marketplace.php?u=".$username."&wheat=".$wheat."&cow=".$cow."&milk=".$milk."&c=".$coins;
header($url);







 ?>
