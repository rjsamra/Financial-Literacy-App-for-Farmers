<?php
session_start();
include './script.php';
$level = $_GET['lvl'];
$username = $_GET['usr'];

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
  header("location: ../quiz.php");
}
$coins =getcoins($username);
$percent = ($coins/$max) *100;
$percent1 = round($percent);
$_SESSION['percent'] = $percent1;
$url = "location: ../levelup.php?lvl=".$level."&usr=".$username;
header($url);

 ?>
