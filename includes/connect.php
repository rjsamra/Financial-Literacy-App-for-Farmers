
<?php

	$sn="remotemysql.com";
	$un="7JJB5iIr2g";
	$pswd= "S8ybckehzo";
	$dbn= "7JJB5iIr2g";

	$conn=new mysqli($sn, $un, $pswd, $dbn);


	if($conn->connect_error)
	{
		die("connection failed:". $conn->connect_error);

	}


?>
