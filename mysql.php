<?php
include('config.php');
	$db = mysqli_connect($hostdb,$user,$pwd, $database);
	if(mysqli_connect_error())
	{
			die(mysqli_connect_error());
	}
?>