<?php
session_start();
include './script.php';


$username = $_SESSION['username'];
$level = $_SESSION['level'];
//$username = "zeel";
//$level = "0";
$sql = "SELECT * FROM `loantaken` WHERE `username` = '$username'; ";
$checkloan = searchWhere($sql);



if($checkloan != "Nullify")
{
  $tobepaid = $checkloan['tobepaid'];
  $pmp = $checkloan['permonthpayable'];
  $disabled = "disabled";

  $_SESSION['LoanTaken'] = True;

  $_SESSION['pmp'] = $pmp;

  $url = "location: ../loan.php?m=disabled";

}
else
{
  $tobepaid = "";
  $pmp = "Pay";
  $disabled = "";
  $_SESSION['LoanTaken'] = False;
  $url = "location: ../loan.php?m=enabled";

}

$_SESSION['tobepaid'] = $tobepaid;

$_SESSION['disabled'] = $disabled;

$_SESSION['pmp'] = $pmp;


header($url);

?>
