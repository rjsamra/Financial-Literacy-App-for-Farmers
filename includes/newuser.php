<?php

  include './script.php';
  $user = $_POST['user'];
  $sql = "INSERT INTO `users`(`username`, `coins`, `level`) VALUES ('$user','20000','0');";
  $check = insertintoSql($sql);
  if($check)
  {
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['level'] = 0;
    $_SESSION['percent'] = 40;
    $_SESSION['coins'] = 20000;
    header("location: ../newuser.php?lvl=".$_SESSION['level']);
  }
  else {
    header("location: ../user.php?m=error");
  }







?>
