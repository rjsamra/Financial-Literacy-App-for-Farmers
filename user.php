
<html>
<head>
<title>user</title>
<style>
body {
  background-repeat:no-repeat;
  background-size: cover;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body background="./images/d2farm.jpeg">
<img onclick="speak()" src="./images/farmer.png" height="950rem" width="850rem" style="margin-top:20rem; margin-left:5rem; position:absolute"/>
<button onclick="poppre()" type="button" data-toggle="modal" data-target="#myModalPrevUser" onclick="window.location.href = '#';" style="background-color:red; color:white; font-size:8rem; border-radius:30%; height:15rem; width:45rem; box-shadow:40px 30px yellow; border:10px solid white; margin-left:25rem; margin-top:125rem; position:relative">Previous</button>
<button  onclick="popnew()" type="button" data-toggle="modal" data-target="#myModalNewUser" onclick="window.location.href = 'coins.html';" style="background-color:green; color:white; font-size:8rem; border-radius:30%; height:15rem; width:45rem; box-shadow:40px 30px yellow;; border:10px solid white; margin-left:25rem; margin-top:10rem; position:relative">New</button>


  <!-- Modal for new user -->
  <div class="modal fade" id="myModalNewUser" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
	  	 <!-- msg to be display on pop up -->
        <div class="modal-header" style="height:33rem; font-size:10rem">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-size:6rem">Enter<br> Username.</h4>
        </div>


		<form method="POST" action="./includes/newuser.php">
			<!-- Input field to enter username-->
			<input name="user"  class="form-control" type="text" style="width:450;center;height:8rem; margin-top:-5rem; margin-left:3rem; font-size:4rem" placeholder="Your name.." required>
			<div class="modal-footer">
			<!--submit bun to go coin's page.-->
			<button name="submit" onclick="window.location.href = 'newuser.php';" type="submit" value="Submit" class="btn btn-primary mb-2" style="height:7rem; width:16rem; margin-left:-33rem; font-size:5rem; position:absolute">आगे</button>
			<button type="button" class="btn btn-default" data-dismiss="modal" style="height:7rem; width:16rem; margin-left:-15rem; font-size:5rem; ">बंद</button>
			</div>
		</form>
      </div>

    </div>
  </div>


<!-- Modal for previouse user -->
<div class="modal fade" id="myModalPrevUser" role="dialog" >
    <div class="modal-dialog" >
      <!-- Modal content-->
      <div class="modal-content">
	  	 <!-- msg to be display on pop up -->
        <div class="modal-header" style="height:33rem; font-size:10rem">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-size:6rem">Enter Previous Username.</h4>
        </div>


		<form method="POST" action="./includes/existinguser.php">
			<!-- Input field to enter username-->
			<input name="user"  class="form-control" type="text" style="width:450;center; height:8rem; margin-top:-5rem; margin-left:3rem; font-size:4rem" placeholder="Your name.." required>
			<div class="modal-footer">
			<!--submit bun to go coin's page.-->
			<button onclick="window.location.href = 'home.php';" type="submit" value="Submit" class="btn btn-primary mb-2" style="height:7rem; width:16rem; margin-left:-33rem; font-size:5rem; position:absolute">आगे</button>
			<button name="submit" type="button" class="btn btn-default" data-dismiss="modal" style="height:7rem; width:16rem; margin-left:-15rem; font-size:5rem; ">बंद</button>
			</div>
		</form>
      </div>

    </div>
  </div>

</body>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>
<script>

		function speak() {
			responsiveVoice.speak("नया गेम शुरू करने के लिए हरे बटन को दबाएं। और पुराने नाम के साथ जारी रखने के लिए लाल बटन दबाएं ", "Hindi Male");
		}
		function popnew() {
			responsiveVoice.speak("अपना नाम लिखें और आगे बढ़ें", "Hindi Male");
		}
		function poppre() {
			responsiveVoice.speak("अपना पिछला नाम लिखें और आगे बढ़ें", "Hindi Male");
		}


</script>
</html>
