<?php
session_start();
$username = $_SESSION['username'];
$level = $_SESSION['level'];
$mp = $_GET['mp'];
include './script.php';
///////////GET DATA OF USERNAME SUCH AS WHEAT ETC ETC ////////////////////
$sql = "SELECT * FROM `gamedata` WHERE `username` = '$username'; ";
$game = searchWhere($sql);
if($game != 'Nullify')
{
  $wheat = $game['wheat'];
  $cow = $game['cow'];
  $milk = $game['milk'];


}
//////////////IF USER IS PLAYING THE GAME FOR FIRST TIME
else {
  $wheat = 10;
  $cow = 1;
  $milk = 0;
  $querry = "INSERT INTO `gamedata`(`username`, `wheat`,`cow`,`milk`) VALUES ('$username','$wheat','$cow','$milk')";
  $insert = insertintoSql($querry);
}

  if($mp == 0)
  {
    $url = "location: ../Game/Farming.php?wheat=".$wheat."&cow=".$cow."&milk=".$milk;
  }
  else {
    $url = "location: ../Game/marketplace.php?wheat=".$wheat."&cow=".$cow."&milk=".$milk;
  }

  header($url);





 ?>
