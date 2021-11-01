<?php
session_start();
$disabled = $_SESSION['disabled'];
$tobepaid = $_SESSION['tobepaid'];
$pmp = $_SESSION['pmp'];
?>
<html>
<head>
<title>Loan</title>
<script>
function loan(amount,roi,timePeriod)
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
	height:10rem;
	width:14rem;
	margin-top:15rem;
	font-size:40px;
}
.tobepaid {
	background-color:white;
	width: 22rem;
  height: 7rem;
}
.loaner{
	margin-left: 40rem;
    margin-top: 50rem;
    font-size:50px;
}
#loantable {
	margin-top:10rem;
	height:10rem;
  display:none;
}
table {
  height: 20rem;
    font-size: 4rem;

}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body background="./images/d2farm.jpeg">


	<div class="schemes">
		<div class="container">
			<div class="row">
				<div class="col-3">

					<button class="loan" onclick="loan(10000,10.00,12)"  <?php echo $disabled;?>>10,000</button>
				</div>
				<div class="col-3">
					<button class="loan" onclick="loan(20000,9.00,13)" <?php echo $disabled;?>>20,000</button>
				</div>
				<div class="col-3">
					<button class="loan" onclick="loan(25000,8.00,14)" <?php echo $disabled;?>>25,000</button>
				</div>
				<div class="col-3">
					<button class="loan" onclick="loan(30000,8.00,18)" <?php echo $disabled;?>>30,000</button>
				</div>
			</div>
		</div>
	</div>
	<div id="loantable">
	<table style="border-radius: 5%; margin-right:5%;" class="table table-dark">
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
<img src="./images/farmer.png" height="750rem" width="650rem" style="margin-top:40rem; margin-left:0rem; position:fixed"/>
	<div class="loaner">
		<button class="tobepaid" style="background-color:blue; border-radius:20%;"><a href="" id="apply" <?php echo $disabled; ?>>Apply</a></button></br></br>
		<div class="tobepaid" id="total"><?php echo $tobepaid;?></div></br>
		<button class="tobepaid" style="background-color:blue; border-radius:20%; " id="pmp"><a href="./includes/deduct.php">Pay <?php echo $pmp;?></a></button></br>
	</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
