<?php
session_start();
//include './includes/script.php';
$username = $_SESSION['username'];
$coins = $_SESSION['coins'];
$level = $_SESSION['level'];

//$_SESSION['percent'] = getper($level,$coins);
 ?>
<html>
<head>
<title>home</title>
<style>
body {
  background-repeat:no-repeat;
  background-size: cover;
}
</style>
</head>
<body background="./images/d2farm.jpeg">
<?php include'./includes/navbar.php'; ?>
<button type="button" onclick="window.location.href = 'video.php';" style="height: 5rem;width: 5rem;border-radius:50%;margin-left: 13rem;margin-top: 6rem;">
    <img height="50rem" width="50rem" style="border-radius:50%" src="./images/video.png">
  </button>
  <img onclick="speak()" src="./images/farmer.png" height="50%" width="60%" style="margin-top: -5rem;margin-left: 0rem;">
<button type="button" style="height: 5rem;width: 5rem;border-radius:50%;margin-left: 13rem;margin-top: -8rem;"><img style="border-radius:50%;" height="50rem" width="50rem" src="./images/question.jpg"></button></body>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>
<script>
         function speak()
        {
            responsiveVoice.speak("विभिन्न सुविधाओं का उपयोग करने के लिए नारंगी बटन पर क्लिक करें। और अपने प्रश्नों के लिए नीले बटन पर क्लिक करें.", "Hindi Male",{rate: 0.9});
        }
</script>
</html>
