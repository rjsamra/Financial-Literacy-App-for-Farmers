<?php
session_start();
include './script.php';
$username = $_SESSION['username'];
$sc = $_GET['sc'];
$award = (int)$_GET['c'];

$coins = getcoins($username);


$update = $coins + $award;
$tep = updateCoins($update,$username);
$_SESSION['coins']=$update;
echo $_SESSION['level'];
$level = $_SESSION['level'];
if($level == 0)
{
  $max = 50000;

}
if($level == 1)
{
  $max = 100000;

}
if($level == 2)
{
  $max = 200000;

}
if($level == 3)
{
  /////////////////initiate quiz and end of game
  header("location: ../quiz.php");
}
$coins =getcoins($username);
$percent = ($coins/$max) *100;
$percent1 = round($percent);
if($percent1 >= 100)
{
  nextlevel($level,$username);
}
else {
  $_SESSION['percent'] = $percent1;
  $_SESSION['coins'] = $coins;
header("location: ../home.php");
}

 ?>
