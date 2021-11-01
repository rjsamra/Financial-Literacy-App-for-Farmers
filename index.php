<html>
<head>
<title>index</title>
<style>
body {
  background-repeat:no-repeat;
  background-size: cover;
}
#arrow{
  
  animation: mymove 2s;
  animation-iteration-count: infinite;
}

@keyframes mymove {
    0%       { transform: translatex(-30px) translatey(-30px) }
    50%      { transform: translatex(250px) translatey(600px); }
    100%     { transform: translatex(-40px) translatey(-50px) }
}

</style>
</head>
<body background="./images/d2farm.jpeg">
<button type="button" style="color:black; border:15px solid black; background-color:white; height:10rem; width:20rem; font-size:6rem; margin-top:2rem; margin-left:20rem"> भाषा</button><br>
<img id="arrow" src="./images/arrow.png" height="250rem" width="200rem" style="position:relative; margin-top:8rem; margin-left:3rem; z-index:1 "/>
<img onclick="speak()" src="./images/farmer.png" height="950rem" width="850rem" style="margin-top:10rem; margin-left:-12rem; position:absolute;"/>
<button type="button" onclick="window.location.href = 'user.php';" style="background-color:blue; color:white; font-size:8rem; border-radius:30%; height:20rem; width:40rem; box-shadow:40px 30px yellow; border:10px solid white; margin-left:10rem; margin-top:50rem; position:relative">Start Game</button>

</body>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>
<script>
			
		function speak() {
            responsiveVoice.speak("आपका हार्दिक स्वागत है। भाषा के लिए आप मेरी मदद ले सकते हैं। नीले बटन को खेल शुरू करने के लिए दबाएँ।", "Hindi Male",{rate: 0.9});    
        }
</script>
</html>
