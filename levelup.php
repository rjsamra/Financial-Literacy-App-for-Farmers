<?php
session_start();
$username = $_GET['usr'];
$level = $_GET['lvl'];
$_SESSION['username'] = $username;
$_SESSION['level'] = $level;

if($level == 3 )
  {
	  header("location: ./quiz.php");
  }

if($level == 0)
{
  $exp1 = 500;
  $exp2 = 500;
  $exp3 = 500;
  $exp4 = 500;
  $target = 50000;
}
if($level == 1)
{
  $exp1 = 1000;
  $exp2 = 1000;
  $exp3 = 1000;
  $exp4 = 1000;
  $target = 100000;
}
if($level == 2)
{
  $exp1 = 2000;
  $exp2 = 2000;
  $exp3 = 2000;
  $exp4 = 2000;
  $target = 200000;
}
$deduct = $exp1+$exp2+$exp3+$exp4;
$url = "./includes/nextlevel.php?usr=".$username."&deduct=".$deduct;

?>


<html>
<head>
<title>level</title>
<style>
input[type="checkbox"] {
  opacity: 0;
}
label{
	color:yellow;
	font-size:4rem;
	margin-top:2rem;
}
#expense{
	background-color:blue;
	opacity:0.5;
	width:32rem;
	height:7rem;
	border-radius:4rem;
	text-align:center;
}
input[type="checkbox"]:checked + label{
   color:white;
   font-size:5rem;
}
</style>
</head>
<body>
 
<div style="border:1px solid black; margin-top:40rem; margin-left:3rem; margin-right:20rem; height:77rem; width:60rem; background-image:url('./images/bg.jpg'); background-size:cover">
<h3 style="font-size:4rem; margin-left:5rem; float:left">Level <?php echo $level; ?></h3>
<h3 style="font-size:4rem; float:left">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTarget:Rs.<?php echo $target; ?></h3>&nbsp&nbsp&nbsp
<img src="./images/coins.png" width="90rem" height="90rem" style="margin-top:2.9rem"/>
<img src="./images/farmer.png" height="700rem" width="500rem" style="margin-left:-3rem; postion:absolute; z-index:-1; margin-top:4rem;"/><br><br><br><br><br><br>
<form method="post" action="<?php echo $url;?>">
<div id="expense" style="margin-top:-45rem; margin-left:27rem"><input type="checkbox" id="e1" name="e1" value="e1" required/><label for="e1">Food -$<?php echo $exp1; ?></label></div>
<div id="expense" style="margin-top:3rem; margin-left:27rem"><input type="checkbox" id="e2" name="e2" value="e2" required/><label for="e2">Clothing -$<?php echo $exp2; ?></label></div>
<div id="expense" style="margin-top:3rem; margin-left:27rem"><input type="checkbox" id="e3" name="e3" value="e3" required/><label for="e3">Shelter -$<?php echo $exp3; ?></label></div>
<div id="expense" style="margin-top:3rem; margin-left:27rem"><input type="checkbox" id="e4" name="e4" value="e4" required/><label for="e4">Others -$<?php echo $exp4; ?></label></div>
<br><br><br><br><br><button type="submit" style="background-color:green; width:50rem; height:9rem; margin-left:4rem;opacity:0.9; color:white; font-size:4rem; box-shadow: 2rem 2rem gray">Next -></button>

</form>
</div>
</body>
</html>
