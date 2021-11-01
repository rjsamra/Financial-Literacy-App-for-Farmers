<?php
session_start();

$username = $_SESSION['$username'];
$level = $_SESSION['level'];
$wheat = $_GET['wheat'];
$cow = $_GET['cow'];
$milk = $_GET['milk'];
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
	.tile
	{
		background-color:silver;
		display: inline-block;
		height: 0;
		border-radius: 15%;
		margin:0.3%;

		padding-bottom: 20%;
		width: 20%;
	}#helpButton
{
	position:fixed;
	top:3%;
	left:3%;
}
	.grass3
	{

		background-color:#06ba45;
	}
	.wheatTile
	{
		background-color:#4bba06;
		background-image: url("GameImages/wheat.png");
		background-size: 100%;
	}
	.cowTile
	{
		background-color:#4bba06;
		background-image: url("GameImages/big cow.png");
		background-size: 100%;
	}

	.nextDay
	{
		background-color: #007bff;
		border: none;
		color: white;
		text-align: center;
		width:80.9%;

		font-size:10vw;

		height: 0;
		padding-bottom: 13%;
		display: inline-block;
	}
	#BT2
	{
	}
	img
	{
		max-width: 100%;
		height:auto;
	}
	.wheatBorder
	{
		-webkit-box-shadow:inset 0px 0px 0px 5px #ebb434;
		-moz-box-shadow:inset 0px 0px 0px 5px #ebb434;
		box-shadow:inset 0px 0px 0px 5px #ebb434;
	}

	.cowBorder
	{
		-webkit-box-shadow:inset 0px 0px 0px 5px #b5f0f7;
		-moz-box-shadow:inset 0px 0px 0px 5px #b5f0f7;
		box-shadow:inset 0px 0px 0px 5px #b5f0f7;
	}

	.harvestedProducts
	{
		width:100%;
		height:auto;
		white-space: nowrap;
	}

#helpButton
{
	position:fixed;
	top:3%;
	left:3%;
}
</style>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>
<script>
         function speak()
        {
            responsiveVoice.speak("प्रिय <?php echo $_SESSION['username'];?>. अब आपके पास <?php echo $_GET['cow'];?>. गाय,  <?php echo $_GET['milk'];?> दूध और  <?php echo $_GET['wheat'];?> गेहूं हैं। इसका उपयोग करते हुए, अधिक पैसा कमाने के लिए, बस गेहूं के बटन पर क्लिक करें, और फिर इसे हरे खेत में उगाएं।अपने उत्पादों को बेचने के लिए लाल बटन दबाएं", "Hindi Male",{rate: 0.9});
        }
</script>

<script>


$(document).ready(function(){


	$("#T1").addClass( "grass3" );
	$("#T2").addClass( "grass3" );
	$("#T3").addClass( "grass3" );
	$("#T4").addClass( "grass3" );
	$("#T5").addClass( "grass3" );
	$("#T6").addClass( "grass3" );
	$("#T7").addClass( "grass3" );
	$("#T8").addClass( "grass3" );
	$("#T9").addClass( "grass3" );
	$("#T10").addClass( "grass3" );
	$("#T11").addClass( "grass3" );
	$("#T12").addClass( "grass3" );
	$("#T13").addClass( "grass3" );
	$("#T14").addClass( "grass3" );
	$("#T15").addClass( "grass3" );
	$("#T16").addClass( "grass3" );
	$("#T17").addClass( "grass3" );
	$("#T18").addClass( "grass3" );
	$("#T19").addClass( "grass3" );
	$("#T20").addClass( "grass3" );

	var wheatSelected=false;
	var wheatAmount=<?php echo $wheat;?>;						/*Jayesh wheatAmount from marketplace*/
	$("#wAmtDisp").text(wheatAmount);		//Update WAmtDisp

	$("#BT1").click(function(){

		if(wheatSelected==false)
		{
			cowSelected=false;
			$("#BT2").removeClass( "cowBorder" );

			wheatSelected=true;
			$(this).addClass( "wheatBorder" );
		}
		else
		{
			wheatSelected=false;
			$(this).removeClass( "wheatBorder" );
		}
	});

	var cowSelected=false;
	var cowAmount=<?php echo $cow;?>;						/*Jayesh cowAmount from marketplace*/
	var milkAmount=<?php echo $milk;?>;						/*Jayesh milkAmount from marketplace*/
	$("#cowAmtDisp").text(cowAmount);		//Update cowAmtDisp
	$("#milkAmtDisp").text(milkAmount);

	$("#BT2").click(function(){

		if(cowSelected==false)
		{
			wheatSelected=false;
			$("#BT1").removeClass( "wheatBorder" );

			cowSelected=true;
			$(this).addClass( "cowBorder" );
		}
		else
		{
			cowSelected=false;
			$(this).removeClass( "cowBorder" );
		}
	});


	$(".playArea").click(function(){
		if(wheatSelected==true)
		{
			if ($(this).hasClass( "wheatTile" ) || $(this).hasClass( "cowTile" ) || wheatAmount==0)
			{}
			else
			{
				$(this).removeClass( "grass3" );
				$(this).addClass( "wheatTile" );
				wheatAmount=wheatAmount-1;
				$("#wAmtDisp").text(wheatAmount);
			}
		}

		if(cowSelected==true)
		{
			if ($(this).hasClass( "wheatTile" ) || $(this).hasClass( "cowTile" ) || cowAmount==0)
			{}
			else
			{
				$(this).removeClass( "grass3" );
				$(this).addClass( "cowTile" );
				cowAmount=cowAmount-1;
				$("#cowAmtDisp").text(cowAmount);
			}
		}
	});

	$(".nextDay").click(function(){
		$( ".wheatTile" ).each(function() {
			$( this ).removeClass( "wheatTile" );
			$( this ).addClass( "grass3" );
			wheatAmount=wheatAmount+3;
			$("#wAmtDisp").text(wheatAmount);
		});

		$(".cowTile").each(function() {
			milkAmount=milkAmount+1;
			$("#milkAmtDisp").text(milkAmount);
			cowAmount++;
		});
	document.getElementById("next").href = "../includes/nextday.php?wheat="+wheatAmount+"&cow="+cowAmount+"&milk="+milkAmount;


	});
});

</script>
</script>
</head>

<body>
	<button onclick="speak()" type="button" style="height:3rem; width:3rem; border-radius:50%;" id="helpButton"><img style="border-radius:50%;" src="./GameImages/question.jpg"/></button>

	<center>
		<div class="tile playArea" id="T1"></div>
		<div class="tile playArea" id="T2"></div>
		<br/>
		<div class="tile playArea" id="T3"></div>
		<div class="tile playArea" id="T4"></div>
		<div class="tile playArea" id="T5"></div>
		<div class="tile playArea" id="T6"></div>
		<br/>
		<div class="tile playArea" id="T7"></div>
		<div class="tile playArea" id="T8"></div>
		<div class="tile playArea" id="T9"></div>
		<div class="tile playArea" id="T10"></div>
		<br/>
		<div class="tile playArea" id="T11"></div>
		<div class="tile playArea" id="T12"></div>
		<div class="tile playArea" id="T13"></div>
		<div class="tile playArea" id="T14"></div>
		<br/>
		<div class="tile playArea" id="T15"></div>
		<div class="tile playArea" id="T16"></div>
		<div class="tile playArea" id="T17"></div>
		<div class="tile playArea" id="T18"></div>
		<br/>
		<div class="tile playArea" id="T19"></div>
		<div class="tile playArea" id="T20"></div>
		<br/>
		<br/>
		<a id="next" href=""><button   class="nextDay">Next Day</button></a>

		<br/>
		<table width="10%">
			<tr>
				<td> <img class="harvestedProducts" src="./GameImages/milk.png" alt="Milk"> </td>
				<td > <span id="milkAmtDisp"></span></td>
			</tr>
		</table>

		<br/>
		<div class="tile bottomTile" id="BT1">
			<img src="./GameImages/wheat.png" alt="Wheat" >
				<span id="wAmtDisp"></span>
			</img>
		</div>

		<div class="tile bottomTile" id="BT2">
			<img src="./GameImages/big cow.png" alt="Cow" >
				<span id="cowAmtDisp"></span>
			</img>
		</div>
		<?php $url = "../includes/marketplacestart.php" ;?>
		<a id="market" href="<?php echo $url;?>"><button style="background-color:red" class="nextDay">SELL</button></a>
	</center>


</body>
</html>
