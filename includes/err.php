<?php
session_start();
$username = $_SESSION['username'];
$sc = $_GET['sc'];
echo $username;
echo $sc;
 ?>
