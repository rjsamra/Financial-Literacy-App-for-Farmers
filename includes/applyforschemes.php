<?php
session_start();
include './script.php';
$username = $_SESSION['username'];
$level = $_SESSION['level'];
$sc=$_GET['sc'];
$total = $_GET['total'];
$pmpy = $_GET['pmpy'];
$duration = $_GET['t'];

$sc = (int)$sc;
$total = (int)$total;
$pmpy = (int)$pmpy;
$duration = (int)$duration;
if($sc ==1)
{
  $sql = "SELECT * FROM 'scheme1taken' WHERE 'username' = '$username' ;";
  $apply = searchWhere($sql);
  if($apply == "Nullify")
  {
    $sql1 = "INSERT INTO `scheme1taken`(`username`, `total`, `permonth`, `duration` ) VALUES ('$username','$total','$pmpy','$duration');";
    $apply1 = insertintoSql($sql1);
	
    if($apply1){
		$_SESSION['temp'] = "";
      header("location: ../schemedetails.php?m=success&sc=1");
	  
    }
    else{
		$_SESSION['temp'] = "disabled";
		$sqlx = "SELECT * FROM 'scheme1taken' WHERE 'username' = '$username' ;";
		$applyx = searchWhere($sqlx);	
		$total = $applyx['total'];
		$pmpy = $applyx['permonth'];
		$duration = $applyx['duration'];
		$urlz = "location: ../schemedetails.php?m=fail&amtx=".$total."&tx=".$duration."&sc=1";	
		header($urlz);
		
   
    }

  }
  else{
    header("location: ../schemedetails.php?m=alreadyapplied&sc=1");
	
  }
}


if($sc ==2)
{
  $sql = "SELECT * FROM 'scheme2taken' WHERE 'username' = '$username' ;";
  $apply = searchWhere($sql);
  if($apply == "Nullify")
  {
    $sql1 = "INSERT INTO `scheme2taken`(`username`, `total`, `permonth`, `duration` ) VALUES ('$username','$total','$pmpy','$duration');";
    $apply1 = insertintoSql($sql1);
    if($apply1){
		$_SESSION['temp'] = "";
      header("location: ../schemedetails.php?m=success&sc=2");
    }
    else{
		$_SESSION['temp'] = "disabled";
		$sqlx = "SELECT * FROM 'scheme2taken' WHERE 'username' = '$username' ;";
		$applyx = searchWhere($sqlx);	
		$total = $applyx['total'];
		$pmpy = $applyx['permonth'];
		$duration = $applyx['duration'];
		$urlz = "location: ../schemedetails.php?m=fail&amtx=".$total."&tx=".$duration."&sc=2";	
		header($urlz);
    }

  }
  else{
    header("location: ../schemedetails.php?m=alreadyapplied&sc=2");
  }
}





if($sc ==3)
{
  $sql = "SELECT * FROM 'scheme3taken' WHERE 'username' = '$username' ;";
  $apply = searchWhere($sql);
  if($apply == "Nullify")
  {
    $sql1 = "INSERT INTO `scheme3taken`(`username`, `total`, `permonth`, `duration` ) VALUES ('$username','$total','$pmpy','$duration');";
    $apply1 = insertintoSql($sql1);
    if($apply1){
		$_SESSION['temp'] = "";
      header("location: ../schemedetails.php?m=success&sc=3");
    }
    else{
		$_SESSION['temp'] = "disabled";
      	$sqlx = "SELECT * FROM 'scheme3taken' WHERE 'username' = '$username' ;";
		$applyx = searchWhere($sqlx);	
		$total = $applyx['total'];
		$pmpy = $applyx['permonth'];
		$duration = $applyx['duration'];
		$urlz = "location: ../schemedetails.php?m=fail&amtx=".$total."&tx=".$duration."&sc=3";	
		header($urlz);
  }
  }
  else{
    header("location: ../schemedetails.php?m=alreadyapplied&sc=3");
  }
  }




if($sc ==4)
{
  $sql = "SELECT * FROM 'scheme4taken' WHERE 'username' = '$username' ;";
  $apply = searchWhere($sql);
  if($apply == "Nullify")
  {
    $sql1 = "INSERT INTO `scheme4taken`(`username`, `total`, `permonth`, `duration` ) VALUES ('$username','$total','$pmpy','$duration');";
    $apply1 = insertintoSql($sql1);
    if($apply1){
		$_SESSION['temp'] = "";
      header("location: ../schemedetails.php?m=success&sc=4");
    }
    else{
		$_SESSION['temp'] = "disabled";
      	$sqlx = "SELECT * FROM 'scheme4taken' WHERE 'username' = '$username' ;";
		$applyx = searchWhere($sqlx);	
		$total = $applyx['total'];
		$pmpy = $applyx['permonth'];
		$duration = $applyx['duration'];
		$urlz = "location: ../schemedetails.php?m=fail&amtx=".$total."&tx=".$duration."&sc=4";	
		header($urlz);
    }

  }
  else{
    header("location: ../schemedetails.php?m=alreadyapplied&sc=4");
  }
}


?>
