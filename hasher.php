<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$string = $_POST["string"];
	$hash = hash("whirlpool", $string);
	echo ("<br>" . $hash);
}
?>
<html>
	<form method="post">
		<input type="text" name="string" placeholder="INTRODU TEXTUL PENTRU HASHING">
	</form>
</html>