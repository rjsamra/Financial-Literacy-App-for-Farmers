<?php
session_start();

 ?>
<html>
<head>
<title>schemes</title>
<style>
body {
  background-repeat:no-repeat;
  background-size: cover;
}
table{
	height:20rem;
	width:50rem;
	font-size:5rem;
	color:red;
	background-color:white;
	margin-left:10rem;
	margin-top:15rem;
}
tr{
	text-align:center;
}
#apply{
	height:8rem;
	width:20rem;
	font-size:5rem;
	margin-left:23rem;
	color:white;
	background-color:blue;
	border:9px solid white;
	border-radius:30%;
}
</style>
<script>
function scheme1(){
	document.getElementById('data').innerHTML="<table cellspacing='1' cellpadding='1' border='1'><tr><td>Amount</td><td>10000</td></tr><tr><td>Rate</td><td>10</td></tr><tr><td>Time</td><td>1 year</td></tr></table><br><button type='button' id='apply'>Apply</button>";
}
function scheme2(){
	document.getElementById('data').innerHTML="<table cellspacing='1' cellpadding='1' border='1'><tr><td>Amount</td><td>20000</td></tr><tr><td>Rate</td><td>5</td></tr><tr><td>Time</td><td>2 years</td></tr></table><br><button type='button' id='apply'>Apply</button>";
}
function scheme3(){
	document.getElementById('data').innerHTML="<table cellspacing='1' cellpadding='1' border='1'><tr><td>Amount</td><td>30000</td></tr><tr><td>Rate</td><td>10</td></tr><tr><td>Time</td><td>1 year</td></tr></table><br><button type='button' id='apply'>Apply</button>";
}
function scheme4(){
	document.getElementById('data').innerHTML="<table cellspacing='1' cellpadding='1' border='1'><tr><td>Amount</td><td>10000</td></tr><tr><td>Rate</td><td>5</td></tr><tr><td>Time</td><td>1 year</td></tr></table><br><button type='button' id='apply'>Apply</button>";
}
</script>
</head>
<body background="./images/d2farm.jpeg">
	<?php include './includes/navbar.php';?>
<img onclick="spk()"  src="./images/farmer.png" height="60%" width="82%" style="margin-top:5rem; margin-left:-2rem; position:fixed; z-index:-1"/>
<button type="button"  style="height:3rem; width:7rem; font-size:0.72rem; margin-left:14rem; margin-top:6rem; background-color:red"><a href="./includes/schemedetails1.php?sc=1">Kisan Vikas Patra</a></button>
<button type="button"  style="height:3rem; width:7rem; font-size:0.72rem; margin-left:14rem; margin-top:2rem; background-color:green"><a href="./includes/schemedetails1.php?sc=2">Public Provident Fund</a></button>
<button type="button"  style="height:3rem; width:7rem; font-size:0.72rem; margin-left:14rem; margin-top:2rem; background-color:blue"><a href="./includes/schemedetails1.php?sc=3">Sukanya Samriddhi Yojna</a></button>
<button type="button"  style="height:3rem; width:7rem; font-size:0.72rem; margin-left:14rem; margin-top:2rem; background-color:violet"><a href="./includes/schemedetails1.php?sc=4">Pension Scheme For Farmers</a></button>
<div id="data"></div>
</body>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>
<script>

         function spk()
        {

            responsiveVoice.speak("अपना पैसा अलग-अलग स्कीम में निवेश करें, किसान विकास के लिए लाल रंग का बटन दबाएं, सार्वजनिक भविष्य निधि के लिए हरे रंग का बटन दबाएँ, सुकन्या समृद्धि योजना के लिए पीला रंग का बटन दबाएँ, किसान  पेंशन योजना के लिए बैंगनी रंग का बटन दबाएँ।", "Hindi Male",{rate: 0.9});

        }

</script>

</html>
