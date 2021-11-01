<?php
session_start();
$_SESSION['username'] = "zeel";
$_SESSION['level'] = 1;

?>
<html>


<head>

  <title>
    go
  </title>
</head>
<body>
  <?php include './includes/navbar.php'; ?>
<button><a href="./includes/getloandata.php"> START </a></button>
<button><a href="./includes/startgame.php?mp=0"> START GAME</a></button>
<button><a href="./includes/marketplacestart.php"> START GAME</a></button>

</body>
</html>
