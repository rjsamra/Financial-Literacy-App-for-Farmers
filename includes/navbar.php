<?php

session_start();

?>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;

  height:2rem;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 5px 4px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
#bar{
	font-size:1rem;
	border-bottom: 1px solid white;
}







</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>
<script>
         function level()
        {
          responsiveVoice.speak("अब आप स्तर <?php echo $_SESSION['level']; ?> में हैं,और आपने इस स्तर का <?php echo $_SESSION['percent']; ?> पूरा कर लिया है।", "Hindi Male",{rate: 0.9});
        }
        function coins()
        {
          responsiveVoice.speak("आपके पास <?php echo $_SESSION['coins']; ?> सिक्के हैं", "Hindi Male",{rate: 0.9});
        }
</script>

</head>


<body>
  <?php include './navbarsc.php'; ?>
  <?php $navprogress = $_SESSION['percent']."%"; ?>
<div style="background-color:rgb(24,208,15); opacity:0.8; height:6rem">

<div id="bar">
	<ul>
    <li style="padding-left: 1rem;"><a><?php echo $_SESSION['username'] ;?></a></a></li>
		<li><a href="./home.php">Home</a></li>
		<li><a href="./includes/startgame.php">Activities</a></li>
		<li><a href="./includes/getloandata.php">Loan</a></li>
	<li><a href="./schemes.php">Scheme</a></li>

	</ul>
</div>
<br><br>
<h5 onclick="level()" style="margin-top:-2rem;float:left;font-size:1.2rem;position:absolute;color:white;">Level <?php echo $_SESSION['level']; ?></h5></h5></h5>
<div class="w3-container" style="width: 8rem;position:relative;margin-top:-2rem; margin-left:4rem; float:left;">
	<div class="w3-light-grey w3-round-xlarge" >
		<div onclick="level()" class="w3-container w3-blue w3-round-xlarge" style="width:<?php echo $navprogress;?>; font-size:1.2rem; color:yellow;"><?php echo $navprogress;?>
     </div>
   </div>

</div>
<div style="border-radius:5px;width: 8rem;height: 2rem;border: 3px solid white;margin-top: -2rem;margin-left: 12rem;">
	<h5  onclick="coins()" style="font-size: 1.2rem;float:left;color:white;margin-top: -1.8rem;margin-left: 1rem;"><?php echo $_SESSION['coins']; ?></h5></h5>
	<img onclick="coins()"  src="./images/coins.png" height="20rem" width="20rem" style="margin-left: 5rem;margin-top:0rem;"/>
</div>
</div>
</body>
</html>
