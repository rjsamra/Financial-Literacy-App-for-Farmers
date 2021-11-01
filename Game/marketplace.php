<?php
session_start();
$username = $_GET['u'];

$wheat = $_GET['wheat'];
$cow = $_GET['cow'];
$milk = $_GET['milk'];
$coins = $_GET['c'];
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
<!--https://codepen.io/AllThingsSmitty/pen/MyqmdM -->
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 2000px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }

  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }

  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }

  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }

  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }

  table td:last-child {
    border-bottom: 0;
  }
}

	.slidecontainer {
	  width: 100%;
	}

	.slider {
	  -webkit-appearance: none;
	  width: 100%;
	  height: 25px;
	  background: #d3d3d3;
	  outline: none;
	  opacity: 0.7;
	  -webkit-transition: .2s;
	  transition: opacity .2s;
	}

	.slider:hover {
	  opacity: 1;
	}

	.slider::-webkit-slider-thumb {
	  -webkit-appearance: none;
	  appearance: none;
	  width: 25px;
	  height: 25px;
	  background: #4CAF50;
	  cursor: pointer;
	}

	.slider::-moz-range-thumb {
	  width: 25px;
	  height: 25px;
	  background: #4CAF50;
	  cursor: pointer;
	}


button.buttonSell{
  display:inline-block;
  padding:0.3em 1.2em;
  margin:0 0.1em 0.1em 0;
  border:0.16em solid rgba(255,255,255,0);
  border-radius:2em;
  box-sizing: border-box;
  text-decoration:none;
  font-family:'Roboto',sans-serif;
  font-weight:300;
  color:#000000;
  text-shadow: 0 0.04em 0.04em rgba(0,0,0,0.35);
  text-align:center;
  transition: all 0.2s;
  background-color:#3bd95a;
}
button.buttonSell:hover{
  border-color: rgba(40, 153, 62,1);
}
@media all and (max-width:30em){
  button.buttonSell{
    display:block;
    margin:0.2em auto;
  }
}

img{
  width:10%;
  height:auto;
}

td{
 vertical-align: center;
}

#coins
{
	height:7%;
	width:30%;
	background-color:black;
	opacity: 0.5;
	border-radius:20%;

	position:fixed;
	right: 5%;
	top:2%;
}
#coinsImg
{
	height:80%;
	width:auto;
	padding:5%;
}
#coinsDisp
{
	position:absolute;
	top:25%;
	font-size:5vw;
	color:#ffffff;
	z-index:999;
}

.grayBg
{
	background-color: black;
	opacity:0.5;

	height: 100%;
	width: 100%;
	background-position: center;
	background-repeat: no-repeat;
	position:fixed;
	left: 0px;
	top: 0px;
}

.sellWindow
{
	background-color: white;

	left: 0%;
	top: 30%;
	width:90%;
	height:40%;
	position:fixed;
	margin:5%;
}
	
.sellDisplayWindow
{
	background-color: white;

	left: 0%;
	top: 30%;
	width:90%;
	height:40%;
	position:fixed;
	margin:5%;
}
</style>

<script>
	$(document).ready(function(){

		//Initialization Start
		var coins = <?php echo $coins; ?> ;				/*Jayesh coins*/
		$("#coinsDisp").text(coins);

		var wheatAmount = <?php echo $wheat;?>;				/*Jayesh wheatAmount*/
		var milkAmount = <?php echo $milk;?>;				/*Jayesh milkAmount*/
		var cowAmount = <?php echo $cow;?>;				/*Jayesh cowAmount*/

		var wheatAvgPrice = 10;
		var milkAvgPrice = 30;
		var cowAvgPrice = 1500;

		//SellWindow Start
		var currAmt = 0;
		var currAvgPrice = 0;
		var selectedProduct = "";
		//SellWindow End

		$("#wAmtDisp").text(wheatAmount);
		$("#wAvgPrice").text(wheatAvgPrice);

		$("#milkAmtDisp").text(milkAmount);
		$("#milkAvgPrice").text(milkAvgPrice);

		$("#cowAmtDisp").text(cowAmount);
		$("#cowAvgPrice").text(cowAvgPrice);


		$(".grayBg").hide();
		$(".sellWindow").hide();
		$(".sellDisplayWindow").hide();
		$("#overPrice").hide(); 
		//alert("Trigger twice Test");

		var selectedAmt = 0; 		//For Sliders
		var selectedPrice = 0.00;  //For Sliders
		//Initialization End

		$("#backButton").click(function(){
			$(".grayBg").hide();
			$(".sellWindow").hide();
		});
		$("#mainBackButton").click(function(){
			$(".grayBg").hide();
			$(".sellWindow").hide();
			$(".sellDisplayWindow").hide();
			
			$("#overPrice").show(); //Hide the message till next Time
			
			document.getElementById("sellfinal").href = "../includes/marketplaceupdate.php?wheat="+wheatAmount+"&cow="+cowAmount+"&milk="+milkAmount+"&c="+coins+"&usr=<?php echo $username;?>";
		});

		//Sell Button ((All))
		$("#confirmSell").click(function(){

			selectedAmt = parseInt( $("#sellAmtDisp").text() );
			selectedPrice = parseFloat( $("#sellpriceDisp").text() );
			var itemAvail = 0;
			var itemAvg = 0;
			var totalCoins = 0;
			
			
			//alert(selectedAmt+" "+selectedPrice);

			

			if(selectedAmt == 0)
			{
				alert("Please select some products to sell")
				return false;
			}

			if(selectedProduct=="wheat")
			{
				wheatAmount = wheatAmount - selectedAmt;
				$("#wAmtDisp").text(wheatAmount);
				
				itemAvail = wheatAmount;
				itemAvg = wheatAvgPrice;
			}
			if(selectedProduct=="milk")
			{
				milkAmount = milkAmount - selectedAmt;
				$("#milkAmtDisp").text(milkAmount);

				itemAvail = milkAmount;
				itemAvg = milkAvgPrice;
			}
			
			totalCoins = parseInt(selectedAmt * selectedPrice);
			if(selectedPrice <= (itemAvg*2))
			{
				coins =  parseInt(coins + totalCoins);
			}
			else
			{
			 	coins =  parseInt(coins - totalCoins);
				
				$("#overPrice").show();
				var overPriceMessage = "The item Average was Rs."+itemAvg+" but was sold at very high cost so the profit has been turned to loss";
				$("#overPrice").text(overPriceMessage);
			}
			$("#coinsDisp").text(coins);
			
			//$(".grayBg").hide();
			$(".sellWindow").hide();
			$(".sellDisplayWindow").show();
			
			$("#sellAvailDispFinal").text(itemAvail);
			$("#sellAmtDispFinal").text(selectedAmt);
			$("#sellpriceDispFinal").text(selectedPrice);
			$("#profitGainDispFinal").text(totalCoins);
			$("#prodAvgFinal").text(itemAvg);
		});

		//On ButtonClick (( Wheat ))
		$("#S1").click(function(){
			$(".grayBg").show();
			$(".sellWindow").show();

			currAmt = wheatAmount;
			currAvgPrice = wheatAvgPrice;

			$("#sellAvailDisp").text(currAmt);
			//$("").text(currAvgPrice);

			$("#amountRangeSlider").attr({
				"max"  : currAmt,
				"min"  : 0,
				"value": 0,
				"step" :1
			});

			/*
			var maxPrice = wheatAvgPrice +(12/wheatAvgPrice) ;
			var minPrice = wheatAvgPrice -(40/wheatAvgPrice);
			var currvalue =  (Math.random() * (maxPrice - minPrice + 1) + minPrice).toFixed(2);
			*/
			
			var maxPrice = 50 ;
			var minPrice = 0;
			var currvalue =  (Math.random() * (maxPrice - minPrice + 1) + minPrice).toFixed(2);
			
			//alert(currvalue);
			$("#priceRangeSlider").attr({
				"max"  : maxPrice,
				"min"  : minPrice,
				"value": currvalue,
				"step" :0.1
			});

			$("#sellAmtDisp").text(0);  //Value on Slider was not updating
			$("#sellpriceDisp").text(currvalue);  //Value on Slider was not updating


			selectedProduct = "wheat";
			$("#sellProdDisp").text("Wheat");
			$("#SellImage").attr("src","GameImages/wheat.png");
			
			$("#sellProdDispFinal").text("Wheat");
			$("#SellImageFinal").attr("src","GameImages/wheat.png");
		});

		//On ButtonClick (( milk ))
		$("#S2").click(function(){
			$(".grayBg").show();
			$(".sellWindow").show();

			currAmt = milkAmount;
			currAvgPrice = milkAvgPrice;

			$("#sellAvailDisp").text(currAmt);
			//$("").text(currAvgPrice);

			$("#amountRangeSlider").attr({
				"max"  : currAmt,
				"min"  : 0,
				"value": 0,
				"step" : 1
			});

			/*
			var maxPrice = parseFloat((milkAvgPrice + (60/milkAvgPrice)).toFixed(1));
			var minPrice = parseFloat((milkAvgPrice - (240/milkAvgPrice)).toFixed(1));

			var currvalue =  (Math.random() * (maxPrice - minPrice + 1) + minPrice).toFixed(1);
			*/
			//alert(currvalue);
			
			var maxPrice = 50 ;
			var minPrice = 0;
			var currvalue =  (Math.random() * (maxPrice - minPrice + 1) + minPrice).toFixed(2);
			
			$("#priceRangeSlider").attr({
				"max"  : maxPrice,
				"min"  : minPrice,
				"value": currvalue,
				"step" : 0.1
			});

			$("#sellAmtDisp").text(0);  //Value on Slider was not updating
			$("#sellpriceDisp").text(currvalue);  //Value on Slider was not updating

			selectedProduct = "milk";
			$("#sellProdDisp").text("Milk");
			$("#SellImage").attr("src","GameImages/milk.png");
			
			$("#sellProdDispFinal").text("Milk");
			$("#SellImageFinal").attr("src","GameImages/milk.png");

		});

	});

</script>

</head>

<body>
  <?php echo "$username"; ?>
	

		<div class="grayBg"></div>
	<div class="sellDisplayWindow">
		<table>
			<thead>
			<tr>
			<th scope="col"></th>
			  <th scope="col">Product</th>
			  <th scope="col">Remaining: </th>
			  <th scope="col">Sold Amount:</th>
			  <th scope="col">Price per unit:</th>
			  <th scope="col">Total Price:</th>
			  <th scope="col">Actual Average of product:</th>
			  <th scope="col"></th>
			</tr>
		  </thead>
			<tr>
				<td class="imageCol" ><center><img id="SellImageFinal" src="GameImages/wheat.png"/></center></td>
				<!--
				<td data-label="Product"> <span id="sellProdDispFinal">Grains</span> </td>
				
				<td data-label="Remaining"><span id="sellAvailDispFinal">10</span> kg/ltr</td>
				-->
				<td data-label="Sold Amount:"><span id="sellAmtDispFinal">10</span> </td>

				<td data-label="Price per unit:">&#8377; <span id="sellpriceDispFinal">10</span> </td>

				<td data-label="Total Price">&#8377; <span id="profitGainDispFinal">10</span> </td>
				
				<td data-label="Actual Average of product">&#8377; <span id="prodAvgFinal">10</span> </td>
				
				<td id="overPrice"></td>
				
				<td class="mainBackButton"> <button id="mainBackButton" class=""><a href="" id="sellfinal">Back</a></button> </td>
				
			</tr>
		</table>
	</div>
	
	
	<div class="sellWindow">
		<table>
			<thead>
			<tr>
			<th scope="col"></th>
			  <th scope="col">Product</th>
			  <th scope="col">Available</th>
			  <th scope="col">Sell Amount:</th>
			  <th scope="col">Price per kg:</th>
			  <th scope="col"></th>
			</tr>
		  </thead>
			<tr>
				<td class="imageCol" ><center><img id="SellImage" src="GameImages/wheat.png"/></center></td>
				<td data-label="Product"> <span id="sellProdDisp">Grains</span> </td>
				<td data-label="Available"><span id="sellAvailDisp">10</span> kg/ltr</td>

				<td data-label="Sell Amount:">
					<span id="sellAmtDisp">10</span>
					<input type="range" class="slider" id="amountRangeSlider">
				</td>

				<td data-label="Price per kg:">&#8377; 
					<span id="sellpriceDisp">10</span>
					<input type="range" class="slider" id="priceRangeSlider" >
				</td>
				<!--
				<td data-label=""><center><button id="confirmSell" class="buttonSell"><a href="" id="sellfinal">Sell</a></button></center></td>
				-->
				<td data-label=""><center><button id="confirmSell" class="buttonSell">Sell</button></center></td>
				
				<td class="backButton"> <button id="backButton" class="">Back</button> </td>

			</tr>
		</table>
	</div>

	<div id="coins"><img id="coinsImg" src="GameImages/coin.png" /> <span id="coinsDisp"></span>
	</div>

	<table>
	  <caption>Market</caption>
	  <thead>
		<tr>
		<th scope="col"></th>
		  <th scope="col">Product</th>
		  <th scope="col">Available</th>
		  <th scope="col"></th>
		</tr>
	  </thead>
	  <tbody>

		<tr>
		  <td class="imageCol"><center><img src="GameImages/wheat.png"/></center></td>
		  <td data-label="Product">Grains</td>
		  <td data-label="Available"> <span id="wAmtDisp"></span> kg</td>
		  <td data-label=""><center><button id="S1" class="buttonSell ">SELL</button></center></td>
		</tr>

		<tr>
		  <td class="imageCol"><center><img src="GameImages/milk.png"/></center></td>
		  <td scope="row" data-label="Product">Milk</td>
		  <td data-label="Available"><span id="milkAmtDisp"></span> ltr.</td>
		  <td data-label=""><center><button id="S2" class="buttonSell">SELL</button></center></td>
		</tr>

	  </tbody>
	</table>


</body>

<script>
var slider = document.getElementById("amountRangeSlider");
var output = document.getElementById("sellAmtDisp");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
  //selectedAmt = this.value;
  //alert(selectedAmt);
}


var slider2 = document.getElementById("priceRangeSlider");
var output2 = document.getElementById("sellpriceDisp");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
  //selectedPrice = this.value;
  //alert(selectedPrice);
}
</script>
</html>
