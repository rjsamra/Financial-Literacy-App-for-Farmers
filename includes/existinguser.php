<?php

  include './script.php';
  $user = $_POST['user'];
  $sql = "SELECT * FROM `users` WHERE `username` = '$user'; ";
  $check = searchWhere($sql);
  if($check != "Nullify")
  {
    session_start();
    $_SESSION['username'] = $check['username'];
    $_SESSION['level'] = $check['level'];
    $_SESSION['coins'] = $check['coins'];
    $level = $_SESSION['level'];
    $username = $_SESSION['username'];
    header("location: ../home.php");
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
$coins =$_SESSION['coins'];
$percent = ($coins/$max) *100;
$percent1 = round($percent);
if($percent1 >= 100)
{
  nextlevel($level,$username);
}
else {
  $percentx = $percent1;
  $_SESSION['percent'] = $percent1;
}


  }
  else {
    header("location: ../user.php?m=error");
  }







?>
