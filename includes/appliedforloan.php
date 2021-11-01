<?php
session_start();
include './script.php';
$amt = $_GET['amt'];
$total = $_GET['total'];
$pmp = $_GET['pmp'];

$username = $_SESSION['username'];
$level = $_SESSION['level'];

$searchcoins = "SELECT * FROM `users` WHERE `username` = '$username'; ";

$querry = searchWhere($searchcoins);
$coins =  $querry['coins'];

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






if($coins - $total > 0)
{
  $coins = $coins + $amt ;
  $updatecoins = updateCoins($coins,$username);
  //$applyForLoan = "UPDATE `users` SET `loanslvl0`='1' WHERE `username` = '$username'; ";
  //$loanflag = insertintoSql($applyForLoan);
  $addloan = "INSERT INTO `loantaken`(`username`, `tobepaid`,`permonthpayable`,`df`) VALUES ('$username','$total','$pmp','0')";
  $loanadded = insertintoSql($addloan);
  $_SESSION['disabled'] = "disabled";
  $_SESSION['tobepaid'] = $total;
  $_SESSION['pmp'] = $pmp;
  $_SESSION['coins'] = $coins;


  $percent = ($coins/$max) *100;
  $percent1 = round($percent);
  if($percent1 >= 100)
  {
    nextlevel($level,$username);
  }
else {
  $_SESSION['percent'] = $percent1;
  echo $_SESSION['percent'];
  header("location: ../loan.php?m=disabled");
}

}
else {

  header("location: ../loan.php?m=selecterror");

}

?>
