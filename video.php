<html>
<head>
<title>user</title>
<style>
body {
  background-repeat:no-repeat;
  background-size: cover;
}

</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body background="./images/d2farm.jpeg">
<img onclick="speak()" src="./images/farmer.png" height="750rem" width="650rem" style="margin-top:50rem; margin-left:46rem; position:absolute"/>

<button onclick="play1(); speak1();" type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#homevideo" style="background-color:red; color:white; font-size:8rem; border-radius:30%; height:20rem; width:39rem; box-shadow:40px 30px gray; border:10px solid white; margin-left:15rem; margin-top:25rem; position:relative">Home</button><br>
<button  onclick="play2(); speak2();" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#loanvideo"  style="background-color:green; color:white; font-size:8rem; border-radius:30%; height:20rem; width:39rem; box-shadow:40px 30px gray;; border:10px solid white; margin-left:15rem; margin-top:5rem; position:relative">Loan</button><br>
<button onclick="play3(); speak3();" type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#activityvideo" style="background-color:blue; color:white; font-size:8rem; border-radius:30%; height:20rem; width:39rem; box-shadow:40px 30px gray; border:10px solid white; margin-left:15rem; margin-top:5rem; position:relative">Activites</button><br>
<button  onclick="play4(); speak4();" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#quizvideo"  style="background-color:#ff00ea; color:white; font-size:8rem; border-radius:30%; height:20rem; width:39rem; box-shadow:40px 30px gray;; border:10px solid white; margin-left:15rem; margin-top:5rem; position:relative">Quiz</button><br>
<button  onclick="play5(); speak5();" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#schemevideo"  style="background-color:#ff5e00; color:white; font-size:8rem; border-radius:30%; height:20rem; width:39rem; box-shadow:40px 30px gray;; border:10px solid white; margin-left:15rem; margin-top:5rem; position:relative">Schemes</button>



  <!-- Modal for home video -->
  <div class="modal fade" id="homevideo" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
	  	 <!-- msg to be display on pop up -->
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- video for home-->
            <video id="video1"  width="1000rem" height="300rem" controls>
                <source src="./videos/go1.mp4" type="video/mp4">
            </video>
        </div> 
      </div> 
    </div>
  </div>

  <!-- Modal for loan video -->
  <div class="modal fade" id="loanvideo" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
	  	 <!-- msg to be display on pop up -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- video for loan-->
            <video id="video2"  width="400" controls>
                <source src="./videos/go2.mp4" type="video/mp4">
            </video>
        </div> 
      </div> 
    </div>
  </div>

   <!-- Modal for activity video -->
   <div class="modal fade" id="activityvideo" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
	  	 <!-- msg to be display on pop up -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- video for activity-->
            <video id="video3"  width="400" controls>
                <source src="./videos/go3.mp4" type="video/mp4">
            </video>
        </div> 
      </div> 
    </div>
  </div>

<!-- Modal for quiz video -->
<div class="modal fade" id="quizvideo" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
	  	 <!-- msg to be display on pop up -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- video for quiz-->
            <video id="video4"  width="400" controls>
                <source src="./videos/go4.mp4" type="video/mp4">
            </video>
        </div> 
      </div> 
    </div>
  </div>


<!-- Modal for scheme video -->
<div class="modal fade" id="schemevideo" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
	  	 <!-- msg to be display on pop up -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- video for scheme-->
            <video id="video5"  width="400" controls>
                <source src="./videos/go5.mp4" type="video/mp4">
            </video>
        </div> 
      </div> 
    </div>
  </div>

</body>


<script> 
var myVideo1 = document.getElementById("video1"); 
var myVideo2= document.getElementById("video2"); 
var myVideo3= document.getElementById("video3"); 
var myVideo4= document.getElementById("video4"); 
var myVideo5 = document.getElementById("video5"); 

function play1() {   myVideo1.play(); } 
function play2() {   myVideo2.play(); }
function play3() {   myVideo3.play(); }
function play4() {   myVideo4.play(); }
function play5() {   myVideo5.play(); }

</script>

<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>
<script>
        function speak()
        {
          responsiveVoice.speak(" विभिन्न सुविधाओं का उपयोग कैसे किया जाता है यह देखने के लिए नीचे दिए गए बटन दबाएं ,मुख पृष्ठ के लिए लाल बटन दबाएँ,ऋण के लिए, हरे बटन को दबाएं,गतिविधियों के लिए, नीला बटन दबाएँ,प्रश्नोत्तरी के लिए, बैंगनी  बटन को दबाएं,योजना के लिए, नारंगी बटन दबाएँ", "Hindi Male",{rate: 0.9});    
        }
			
		function speak1() {
			responsiveVoice.speak("video 1 is playing ", "Hindi Male");
		}
        function speak2() {
			responsiveVoice.speak("video 2 is playing ", "Hindi Male");
		}
        function speak3() {
			responsiveVoice.speak("video 3 is playing ", "Hindi Male");
		}
        function speak4() {
			responsiveVoice.speak("video 4 is playing ", "Hindi Male");
		}
        function speak5() {
			responsiveVoice.speak("video 5 is playing ", "Hindi Male");
		}
        
		


</script>
</html>