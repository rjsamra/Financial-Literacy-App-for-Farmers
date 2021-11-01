<?php
session_start();

 ?>
<html>
<head>
<title>newuser</title>
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

<div style="position:absolute; color:white; font-size:2rem; margin-top:3rem; margin-left:3rem">You have earned <br>20,000 coins</div>
<br>
<img onclick="speak()" src="./images/farmer.png"  id="kaka" height="50%" width="40%" style="margin-top:8rem; margin-left:1rem; position:fixed;"/>
<a href="#" onclick="enableLoop();" style="text-decoration:none"><button type="button" style="height:3rem; width:7rem; font-size:2rem; margin-left:11rem; margin-top:12rem; background-color:yellow; color:red; font-style:bold">Claim</button></a>
<button type="button"  style="height:3rem; width:7rem; font-size:1rem; margin-left:11rem; margin-top:5rem; background-color:green; color:white; font-style:bold"><a href="./home.php">Proceed</a></button>
<audio  id="myAudio">
						<source src="sound.mp3" type="audio/mpeg">
					</audio>
					<audio  id="kakaspeech">
						<source src="earning.mp3" type="audio/mpeg">
					</audio>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>
<script>
         function speak()
        {
            responsiveVoice.speak("बधाई हो। आपने 20000 के सिक्के जीते। इसे पीले बटन दबाकर प्राप्त करें। और हरे बटन को दबाकर आगे बढ़ें।", "Hindi Male",{rate: 0.9});
        }
</script>
<audio  id="myAudio">
						<source src="sound.mp3" type="audio/mpeg">
					</audio>
					<audio  id="kakaspeech">
						<source src="earning.mp3" type="audio/mpeg">
					</audio>
<script>

		var x = document.getElementById("myAudio");
		var y = document.getElementById("kakaspeech");
		function enableLoop() {
			  x.loop = true;
			  x.play();
		}

		document.getElementById("kaka").addEventListener("click", function() {
			y.play();
		});


	</script>
<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/coinfall.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky-sidebar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
