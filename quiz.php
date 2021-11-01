<html>
<head>
<title>quiz</title>
<style>
body {
  background-repeat:no-repeat;
  background-size: cover;
}
</style>
<script>

</script>
</head>
<body background="./images/d2farm.jpeg">
<img onclick="speak()" src="./images/farmer.png" height="950rem" width="850rem" style="margin-top:20rem; margin-left:4rem; position:fixed;"/>
<button type="button" onclick="window.location.href = 'quiz1.php';" style="background-color:red; color:white; font-size:8rem; border-radius:30%; height:20rem; width:40rem; box-shadow:40px 30px yellow; border:10px solid white; margin-left:15rem; margin-top:85rem; position:relative;">Start</button>
</body>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>
<script>
         function speak()
        {
          responsiveVoice.speak("अपनी वित्तीय साक्षरता का परीक्षण करने के लिए नीचे दिए गए बटन पर क्लिक करें", "Hindi Male",{rate: 0.9});    
        }
</script>
</html>
