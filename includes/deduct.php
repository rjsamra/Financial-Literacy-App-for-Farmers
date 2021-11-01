<?php
session_start();
include './script.php';


$username = $_SESSION['username'];
$level = $_SESSION['level'];
$sql = "SELECT * FROM `loantaken` WHERE `username` = '$username'; ";
$checkloan = searchWhere($sql);
$tobepaid = $checkloan['tobepaid'];

$pmp = $checkloan['permonthpayable'];

$tobepaidx = $tobepaid - $pmp;

$_SESSION['tobepaid'] = $tobepaidx;
$updateloans = updateLoan($tobepaidx,$username);
$coins = getcoins($username);
$coinsx = $coins - $pmp ;
$setcoins = updateCoins($coinsx,$username);

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
$coins = getcoins($username);
$percent = ($coins/$max) *100;
$percent1 = round($percent);
if($percent1 > 99)
{
  nextlevel($level,$username);
}
else {
  $_SESSION['percent'] = $percent1;
  echo $_SESSION['percent'];
}



if($tobepaidx < 0)
{
  $_SESSION['LoanTaken'] = False;
  $_SESSION['disabled'] = "enable";
  $_SESSION['tobepaid'] = "";
  $_SESSION['pmp'] = "paye";
  $deleterow = deleterow($username);
  header("location: ../loan.php");
}
$_SESSION['coins'] = $coinsx;

header("location: ./getloandata.php");



 ?>
