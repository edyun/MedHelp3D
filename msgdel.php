<?php
include('session.php');
include('navbar.php');
$id = $_GET["id"];

$sqldel = "DELETE FROM mesaje WHERE id='$id'";
$resultdel = mysqli_query($db, $sqldel);

if($resultdel)
{
	header("location: mesagerie.php");
}
else
{
	die(mysql_error());
}



include('footer.php');
?>