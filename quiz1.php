<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<title>quiz1</title>
<style>
body {
  background-repeat:no-repeat;
  background-size: cover;
}
div{
	background-color:black; 
	color:white; 
	font-size:5rem; 
	border-radius:30%; 
	height:9rem; 
	width:32rem; 
	border:10px solid white; 
	margin-left:12rem; 
	margin-top:70rem; 
	padding-left:8rem;
	padding-top:3rem;
	margin-bottom:7rem;
}
/*
.answer1{
	background-color:white !important;
	height:30rem;
	width:20%;
	font-size:5rem;
	margin-top:6rem;
	margin-left:5%;
	color:blue;
	padding:4.5%;
	border-radius:45px;
}
.answer2{
	background-color:black;
	height:30rem;
	width:20%;
	font-size:5rem;
	margin-top:10rem;
	margin-left:5%;
	margin-right:5%;
	color:white;
	padding:4.5%;
	border-radius:45px;

}
*/
.ansbox1
{
	background-color:white;
	height:30rem;
	width:20%;
	font-size:8vw;
	padding:5%;
	
	border-radius:25%;
}
.ansbox2
{
	background-color:black;
	height:30rem;
	width:20%;
	font-size:8vw;
	padding:5%;
	color:white;
	border-radius:25%;
}
.q3box
{
	top:80%;
}

input[type="radio"] {
  opacity: 0;
}
#a1:checked + label {
    background-color: rgb(0,204,0);
	color:white;
}
#b1:checked + label {
    background-color: rgb(255,0,0);
	color:white;
}

#completeContainer
{
	height:40%;
	width:90%;
	padding:5%;
	background-color:white;
}
</style>
<script>
/*
window.onload = function(){
	$q1();
};

document.addEventListener("DOMContentLoaded", function(){
	$q1();
});
*/
$(document).ready(function(){
	
	var maxQuest = 5;
	var fadeTime = 1000;
	
	$("#Q1").hide();
	$("#Q2").hide();
	$("#Q3").hide();
	$("#Q4").hide();
	$("#Q5").hide();
	$("#Complete_Page").hide();
	$("#score").show();
	
	var currQuest = 1;
	
	$("#outOfPlaceholder").text(currQuest);
	$("#Q1").fadeIn(fadeTime);	
	$(".prevButton").attr("disabled", true);
	
	var percent = 0;
	$(".progress-bar").css("width", percent+"%");
	$("#progressPercent").text(percent+"%");

	$(":radio").change(function(){
	//validation
	
		var questAnswered = false;		

		questAnswered = true;
    
		//fade old out fade new in
		if (currQuest!=maxQuest+1 && questAnswered)
		{
			$("#Q"+currQuest).fadeOut(fadeTime);
			currQuest+=1;
			setTimeout(function(){ $("#Q"+currQuest).fadeIn(fadeTime); },fadeTime)
			if(currQuest<=maxQuest)
				$("#outOfPlaceholder").text(currQuest);
			
			//Re-enable prev button
			$(".prevButton").attr("disabled", false);
			
			//Progress Bar
			percent = (((currQuest-1)/maxQuest)*100);
			$(".progress-bar").css("width", percent+"%");
			$("#progressPercent").text(percent+"%");
			
			if (currQuest==1)
			{	
				$q1();	
					
			}
			else if(currQuest==2)
			{	
				$q2();	
			}
			else if(currQuest==3)
			{	
				$q3();	
			}
			else if(currQuest==4)
			{	
				$q4();	
			}
			else if(currQuest==5)
			{	
				$q5();	
			}
		}
		
		if (currQuest==maxQuest+1)
		{
			//disable button
			//$(".nextButton").attr("disabled", true);
			
			//Change Next Button Text
			//$(".nextButton").attr("value","Complete");
			$calcScore();
			$("#progressPercent").text("100%");
			$("#Complete_Page").show();
			responsiveVoice.speak("आपने प्रश्नोत्तरी पूरी कर ली है। और आपका स्कोर है 60", "Hindi Male",{rate: 0.9});
			
		}	
  });
  
  $calcScore = function(  ){

	var score=0;
	var maxScore = maxQuest*1;
		
	for (i=1;i <= maxQuest;i++)
	{
		score += parseInt( $("input[name='Q"+i+"']:checked").val() );
		//alert($("input[name='Q"+i+"']:checked").val());
	}
	score = (score/maxScore)*100;
	//alert(score);
	$("#score").text(score);
		
  }
 
});
</script>
</head>
<body background="./images/d2farm.jpeg">
	<img src="./images/farmer.png" height="950rem" width="850rem" style="margin-top:20rem; margin-left:4rem; position:fixed; z-index:-1"/><br>
	
	
	
	<fieldset  id="Q1" class="quiz" >
		<div onclick="k1()" style="background-color:blue" id="">Question 1</div>
		<center>
			<input style="background-color:white" type="radio" id="a1" name="Q1" value="0"/><label class="ansbox1 " for="a1">Agri term</label>
			<input style="background-color:black" type="radio" id="b1" name="Q1" value="1"/><label class="ansbox2 " for="b1">Agri Gold</label>
		</center>
		<!--
		<input type="radio" name="Q1" value="0" /><div class="front-end box">
		<span>Front-end</span>
		</div>
		<input type="radio" name="Q1" value="1" /><label class="ans2"></label>
		-->
	</fieldset>	
	
	<fieldset  id="Q2" class="quiz" >
		<div style="background-color:blue" id="">Question 2</div>
		<center>
			<input style="background-color:white" type="radio" id="a2" name="Q2" value="1"/><label class="ansbox1" for="a2">Agri term</label>
			<input style="background-color:black" type="radio" id="b2" name="Q2" value="0"/><label class="ansbox2" for="b2">Kisan credit</label>
		</center>
	</fieldset>	
	
	<fieldset  id="Q3" class="quiz" >
		<div style="background-color:blue" id="">Question 3</div>
		<center>
			<input style="background-color:white" type="radio" id="a3" name="Q3" value="1"/><label class="ansbox1" for="a3">Kisan credit</label>
			<input style="background-color:black" type="radio" id="b3" name="Q3" value="0"/><label class="ansbox2" for="b3">Agri term</label>
		</center>
	</fieldset>	
	
	<fieldset  id="Q4" class="quiz" >
		<div id="">Question 4</div>
		<center>
			<input style="background-color:white" type="radio" id="a4" name="Q4" value="0"/><label class="ansbox1" for="a4">Rs. 1,000</label>
			<input style="background-color:black" type="radio" id="b4" name="Q4" value="1"/><label class="ansbox2" for="b4">Rs. 20,000</label>
		</center>
	</fieldset>	
	
	<fieldset  id="Q5" class="quiz" >
		<div  style="background-color:blue" id="">Question 5</div>
		<center>
			<input style="background-color:white" type="radio" id="a5" name="Q5" value="1"/><label class="ansbox1" for="a5">Yes</label>
			<input style="background-color:black" type="radio" id="b5" name="Q5" value="0"/><label class="ansbox2" for="b5">No</label>
		</center>
	</fieldset>	
	
	<fieldset  id="Complete_Page" class="quiz">
		
		<span id="completeContainer">
		<center>
			<span id="completeText">You have completed taking the survey</span>
			<hr/>
			<span id="completeText">Your Score is:</span>
			<br/>
			<span id="score"></span>
		</center>
		</span>
	</fieldset>
	
	<!--
	<span>Question <span id="outOfPlaceholder"></span> / 5</span>	
	-->
		
</body>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>
<script>
		
		function k1(  )
		{
			responsiveVoice.speak("यदि किसान को कर्ज  के लिए आवेदन करना है, और उसके पास सोने की बचत है, तो उसे किस कर्ज  पर आवेदन करना चाहिए?  कृषि कर्ज  के लिए सफेद बटन दबाएं और कृषि सोना कर्ज  के लिए काला बटन दबाएं", "Hindi Male",{rate: 0.9});    
		}
		$q2 = function(  )
        {
            responsiveVoice.speak("यदि आपका किसान मित्र जिसके पास दूध डेयरी है। वह कर्ज  लेना चाहता है तो आप उसे किस कर्ज  की सलाह देंगे?  कृषि अवधि कर्ज  के लिए सफेद बटन दबाएं और किसान श्रेय कर्ज   के लिए काला बटन दबाएं", "Hindi Male",{rate: 0.9});    
        }
		$q3 = function(  )
        {
            responsiveVoice.speak("यदि आपका किसान मित्र जिसके पास अपनी जमीन है। वह दस्तावेज प्रस्तुत किए बिना ऋण लेना चाहता है,क्योंकि कोई निकटतम बैंक उपलब्ध नहीं है । तो आप उसे किस कर्ज  की सलाह देंगे?  किसान श्रेय कर्ज  के लिए सफेद बटन दबाएं और कृषि अवधि कर्ज  के लिए काला बटन दबाएं ", "Hindi Male",{rate: 0.9});    
        }
		$q4 = function(  )
        {
            responsiveVoice.speak("परम प्रगत कृषि सेवा के अंतर्गत  भारत सरकार तीन साल में किसानों को प्रति एकड़ कितने पैसे देती है? 1000 के लिए सफेद बटन दबाएं और 20000  के लिए काला बटन दबाएं ", "Hindi Male",{rate: 0.9});    
        }
		$q5 = function(  )
        {
			responsiveVoice.speak("क्या आपको लगता है कि किसान को अपने वेतन का उपयोग बीमा में करना चाहिए ? क्या यह मददगार होगा ? हाँ के लिए सफेद बटन दबाएं और नहीं  के लिए काला बटन दबाएं ", "Hindi Male",{rate: 0.9});    
        }
		document.getElementById("Complete_Page").addEventListener("show",k2);
		function k2()
        {

            responsiveVoice.speak("आपने प्रश्नोत्तरी पूरी कर ली है। और आपका स्कोर है"+score, "Hindi Male",{rate: 0.9});

        }
		/*$(document).ready(function(){		
			setTimeout(function(){
				$q1();
			}, 1000);
		});*/
		$(".rvNotification").hide(); //Some wierd whitespace was  apperring
		
</script>
</html>