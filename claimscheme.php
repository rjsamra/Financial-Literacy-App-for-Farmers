<?php
session_start();
$sc = $_GET['sc'];
if($sc == 1)
{
	$sch="किसन वीकास पत्र योजना";
	$claim = 11000;
}

if($sc == 2)
{
	$sch="सार्वजनिक भविष्य निधि योजना";
	$claim = 22000;
}

if($sc == 3)
{
	$sch="सुकन्या समृद्धि योजना";
	$claim = 33000;
}

if($sc == 4)
{
	$sch="किसान  पेंशन योजना ";
	$claim = 44000;
}


?>
<html>

<head>

<title></title>

<meta charset="UTF-8">

	<meta name="description" content="EndGam Gaming Magazine Template">

	<meta name="keywords" content="endGam,gGaming, magazine, html">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body {

  background-repeat:no-repeat;

  background-size: cover;

}

</style>

</head>

<body background="./images/d2farm.jpeg">



<div style="position:absolute; color:white; font-size:2rem; margin-top:3rem; margin-left:3rem">Congratulations! You have earned<br><?php echo $claim;?> coins</div>

<br>

<img onclick="k2()" src="./images/farmer.png"  id="kaka" height="50%" width="40%" style="margin-top:8rem; margin-left:1rem; position:fixed;"/>

<a href="./includes/claim.php?c=<?php echo $claim; ?>&sc=<?php echo $sc;?>" onclick="" style="text-decoration:none"><button type="button" style="height:3rem; width:7rem; font-size:2rem; margin-left:10rem; margin-top:12rem; background-color:yellow; color:red; font-style:bold">Claim</button></a>







	

</body>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>

<script>

         function k2()
        {

            responsiveVoice.speak("बधाई, आपने<?php echo $claim;?>सिक्कों को <?php echo $sch;?>स्कीम में अर्जित किया", "Hindi Male",{rate: 0.9});

        }

</script>


</html>