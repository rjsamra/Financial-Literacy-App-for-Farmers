<?php
session_start();
$username = $_SESSION['username'];
$amtobepaider = (int)$_GET['amt'];
$durationer = (int)$_GET['ddr'];
$sc = $_GET['sc'];
$error = "";



if($sc == '1'){
  $schemeid = 1;
  $schemename = "Kisan Vikas Patra";
  $amount = 10000;
  $interest = 10.00;
  $duration = 12;
  $permonthpayable = $amount/$duration;
  $total = $amount + $amount/$interest;
  $permonthpayable = (int)$permonthpayable;
  if($_GET[m] == "success")
  {
    $amtobepaid = $amount;
    $durationx = $duration;
  }
  if($_GET[m] == "fail")
  {
	$amtobepaid = "YOu have already applied ";
    $durationx = "This Scheme";
	$_SESSION['temp'] = "disabled";
	
  }
  if($_GET[m] == "deduct")
  {
    $amtobepaid = $amtobepaider;
    $durationx = $durationer;
	
  }
  if($_GET[m] == "exist")
  {
    $amtobepaid = $_GET['amtx'];
    $durationx = $_GET['tx'];
  }


}
elseif ($sc == '2') {
  $schemeid = 2;
  $schemename = "Public Provident Fund";
  $amount = 20000;
  $interest = 10.00;
  $duration = 12;
  $permonthpayable = $amount/$duration;
  $total = $amount + $amount/$interest;
  $permonthpayable = (int)$permonthpayable;
  if($_GET[m] == "success")
  {
    $amtobepaid = $amount;
    $durationx = $duration;
  }
  if($_GET[m] == "fail")
  {
	  
    $amtobepaid = "YOu have already applied ";
    $durationx = "This Scheme";
	$_SESSION['temp'] = "disabled";
  }
  if($_GET[m] == "deduct")
  {
    $amtobepaid = $amtobepaider;
    $durationx = $durationer;
  }
  if($_GET[m] == "exist")
  {
    $amtobepaid = $_GET['amtx'];
    $durationx = $_GET['tx'];
  }

}
elseif ($sc == '3') {
  $schemeid = 3;
  $schemename = "Sukanya Samriddhi Yojna";
  $amount = 30000;
  $interest = 10.00;
  $duration = 12;
  $permonthpayable = $amount/$duration;
  $total = $amount + $amount/$interest;
  $permonthpayable = (int)$permonthpayable;
  if($_GET[m] == "success")
  {
    $amtobepaid = $amount;
    $durationx = $duration;
  }
  if($_GET[m] == "fail")
  {
	  $amtobepaid = "YOu have already applied ";
    $durationx = "This Scheme";
	$_SESSION['temp'] = "disabled";
  }
  if($_GET[m] == "deduct")
  {
    $amtobepaid = $amtobepaider;
    $durationx = $durationer;
  }
  if($_GET[m] == "exist")
  {
    $amtobepaid = $_GET['amtx'];
    $durationx = $_GET['tx'];
  }
}
elseif ($sc == '4') {
  $schemeid = 4;
  $schemename = "Pension Scheme For Farmers";
  $amount = 40000;
  $interest = 10.00;
  $duration = 12;
  $permonthpayable = $amount/$duration;
  $total = $amount + $amount/$interest;
  $permonthpayable = (int)$permonthpayable;
  if($_GET[m] == "success")
  {
    $amtobepaid = $amount;
    $durationx = $duration;
  }
  if($_GET[m] == "fail")
  {
	$amtobepaid = "YOu have already applied ";
    $durationx = "This Scheme";
	$_SESSION['temp'] = "disabled";
  }
  if($_GET[m] == "deduct")
  {
    $amtobepaid = $amtobepaider;
    $durationx = $durationer;
  }
  if($_GET[m] == "exist")
  {
    $amtobepaid = $_GET['amtx'];
    $durationx = $_GET['tx'];
  }
}
else {
  // code...
}

	
  $url = "./includes/applyforschemes.php?sc=".$schemeid."&total=".$amount."&pmpy=".$permonthpayable."&t=".$duration;
  $url1 = "./includes/deductscheme.php?sc=".$schemeid."&total=".$amtobepaid."&pmpy=".$permonthpayable."&t=".$durationx;
  if($durationer < 0)
{
	header("location: ./claimscheme.php?sc=".$sc);
}
 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Scheme Details</title>
  </head>
  <body>
    <?php include './includes/navbar.php';?>


    <h1><?php echo $schemename?></h1>
    <div class="container">
      <table onclick="speak()" class="table table-dark">
        <tr>
          <th>Amount</th>
          <td style="color:red">Rs.<?php echo $amount;?></td>
        </tr>
        <tr>
          <th>Interest</th>
          <td><?php echo $interest;?>%</td>
        </tr>
        <tr>
          <th>Duration</th>
          <td><?php echo $duration;?>Months</td>
        </tr>
        <tr>
          <th>Benefit</th>
          <td style="color:green">Rs.<?php echo $total;?></td>
        </tr>
        <tr>
          <th>Monthly Payable</th>
          <td style="color:orange"><?php echo $permonthpayable;?></td>
        </tr>

      </table>
    </div>
    <center>

      <button class="btn btn-primary"><a href="<?php echo $url;?>">Apply</a></button></br>
      <div class="pending">
        <span id="pending"><?php echo $error;?><?php echo $amtobepaid; ?></span><span id="dur"> FOR &nbsp<?php echo $durationx; ?></span>
      </div>
      <button class="btn btn-danger" <?php echo $_SESSION['temp']; ?>><a href="<?php echo $url1;?>">Pay Monthly Value Rs. <?php echo $permonthpayable;?></a></button>
    </center>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=a4iOGaf5"></script>

<script>

         function speak()

        {

            responsiveVoice.speak("इस योजना मैं , राशि  <?php echo $amount;?>, ब्याज <?php echo $interest;?> , अवधि, <?php echo $duration;?> महीने, लाभ, <?php echo $total;?> रुपये .मासिक देय हैं <?php echo $permonthpayable;?>. इस योजना के लिए नीचे दिए गए नीले बटन को दबाएं। और मासिक भुगतान करने के लिए, नीचे दिए गए लाल बटन को दबाएं", "Hindi Male",{rate: 0.9});

        }

</script>
</html>
