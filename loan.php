<?php
session_start();
$disabled = $_GET['m'];
$tobepaid = $_SESSION['tobepaid'];
$pmp = $_SESSION['pmp'];

?>
<html>
<head>
<title><?php echo gettype($_SESSION['percent'])?></title></title>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>
<script>
function loan(amount,roi,timePeriod,str)
{
  total = amount + amount*(roi/100);
  perMonthPayable = total/timePeriod;
  perMonthPayable = Math.round(perMonthPayable);

    document.getElementById("loantable").style.display = "block";
    document.getElementById("loan-amount").innerHTML = amount;
    document.getElementById("loan-roi").innerHTML = roi;
    document.getElementById("loan-period").innerHTML = timePeriod + "Months";
    document.getElementById("total").innerHTML = total;
    document.getElementById("apply").href = "./includes/appliedforloan.php?amt="+amount+"&total="+total+"&pmp="+perMonthPayable;
    document.getElementById("pmp").innerHTML = perMonthPayable;
	responsiveVoice.speak(str+"इस ऋण के लिए राशि है"+amount+" और ब्याज की दर होगी"+roi+"रुपये और समय की अवधि होगी"+timePeriod +"महीने. और आपको प्रति माह" +perMonthPayable+ "रुपये देने होंगे। इसके लिए पीला बटन दबाएं", "Hindi Male",{rate: 0.9});




}
//to be speak ......
		function speak()
        {

          responsiveVoice.speak("विभिन्न ऋणों में अपने पैसे का उपयोग करने के लिए, ऊपर दिए गए बटन दबाएं। 10000 के ऋण के बारे में जानकारी प्राप्त करने के लिए, हरे रंग का बटन दबाएं, 20000 के लिए नीला दबाएं, 25000 के लिए गुलाबी दबाएं। और 30000 के लिए बैंगनी बटन दबाएं।", "Hindi Male",{rate: 0.9});

          responsiveVoice.speak("विभिन्न ऋणों में अपने पैसे का उपयोग करने के लिए, ऊपर दिए गए बटन दबाएं। कृषि अवधि ऋण के ऋण के बारे में जानकारी प्राप्त करने के लिए, हरे रंग का बटन दबाएं, कृषि सोना ऋण के लिए नीला दबाएं,किसान क्रेडिट ऋण के लिए गुलाबी दबाएं। और कागवानी ऋण के लिए बैंगनी बटन दबाएं।", "Hindi Male",{rate: 0.9});

        }
	function loan1()
        {
		    //responsiveVoice.speak("यदि आपके पास डेयरी फार्म और मामूली दायित्व है। तो आप इस ऋण के लिए आवेदन कर सकते हैं", "Hindi Male",{rate: 0.9});
        }


</script>
<style>
body {
  background-repeat:no-repeat;
  background-size: cover;
}
.loan {
	background-color:red;
	border-radius: 20%;
  font-size: 16px;
  color: white;
  margin-top: 1rem;
  height: 5rem;
  width: 4rem;

}
.tobepaid {
	background-color:white;
  width: 5rem;
    height: 3rem;
    font-size: 20px;

    margin-bottom:1rem;
}
.loaner{
  margin-left: 14rem;
margin-top: 1rem;
font-size: 50px;
position:fixed;
z-index: +999;

}
#loantable {
	margin-top:1rem;
	height:10rem;
  display:none;
}
table {
  height: 20rem;
    font-size: 1rem;

}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body background="./images/d2farm.jpeg">
	<?php include'./includes/navbar.php'; ?>

	<div class="schemes">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<button class="loan" style="background-color:#06bf00;"    onclick="loan(10000,9.00,12,'कृषि अवधि ऋण . यदि आपके पास डेयरी फार्म और मामूली दायित्व है। तो आप इस ऋण के लिए आवेदन कर सकते हैं.');"  <?php echo $disabled;?>>कृषि अवधि ऋण</button>
				</div>
				<div class="col-3">
					<button class="loan"  style="background-color:#2601BF;"  onclick="loan(20000,9.50,13,'कृषि सोना ऋण.  अगर आपके पास सोने के गहने हैं। तो आप इस ऋण के लिए आवेदन कर सकते हैं।');"  <?php echo $disabled;?>>कृषि सोना ऋण</button>
				</div>
				<div class="col-3">
					<button class="loan"  style="background-color:#ff00d9;"  onclick="loan(25000,8.00,18,'किसान क्रेडिट ऋण. सभी किसान कृषक, मालिक इस ऋण के लिए आवेदन कर सकते हैं');" <?php echo $disabled;?>>किसान क्रेडिट ऋण</button>
				</div>
				<div class="col-3">
					<button class="loan" style="background-color:#8800ff;"   onclick="loan(30000,7.00,24,'कागवानी ऋण. 60 वर्ष की आयु तक का कोई भी किसान इस ऋण के लिए आवेदन कर सकता है');" <?php echo $disabled;?>>बागवानी ऋण</button>
				</div>
			</div>
		</div>
	</div>
	<div id="loantable">
	<table style="    width: 100%;
    height: 2rem;
    max-width: 100%;
    margin-bottom: 20px;" class="table table-dark">
						  <tbody>
							<tr>
							  <th id="loan" >Amount</th>
							  <td id="loan-amount"></td></td>
							</tr>
							<tr>
							  <th id="loan">Rate Of Interest</th>
							  <td id="loan-roi" ></td>
							</tr>
							<tr>
							  <th id="loan">Period</th>
							  <td id="loan-period"></td>
							</tr>
						  </tbody>
					</table>
	</div>
<img onclick="speak()" src="./images/farmer.png" height="35%" width="52%" style="margin-top:0rem; margin-left:0rem; position:fixed"/>
	<div class="loaner">

		<button class="tobepaid"  style="background-color:red; color:white;"><a href="" id="apply" <?php echo $disabled; ?>>Apply</a></button>
		<div class="tobepaid" style="" id="total"><?php echo $tobepaid;?></div>
		<button class="tobepaid" style="background-color:orange;color:white;border-radius:20%; font-size: 0.8rem;" id="pmp"><a href="./includes/deduct.php">Pay <?php echo $pmp;?></a></button>


	</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
