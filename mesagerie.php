<?php
include('navbar.php');

?>
<h2 class="text-center">Mesagerie</h2>
<br>
<hr>
<?php


$querymesaje = 'SELECT * FROM mesaje';
$resultmesaje = mysqli_query($db, $querymesaje);


if(mysqli_num_rows($resultmesaje)==0)
{
	echo '<br><br><br><h3 class="text-center">Platforma nu a primit niciun mesaj in ultima perioada! :)</h3><br><br>';
}
else
{
while($row = mysqli_fetch_array($resultmesaje))
{
	$id = $row['id'];
	$nume = $row['nume'];	
	$email = $row['email'];
	$mesaj = $row['mesaj'];
	
	echo '<center><div class="mesaje">';
	echo '<h6>Nume </h5>' . $nume . '<br>';
	echo '<h6>E-mail</h5>' . $email . '<br>';
	echo '<h6>Mesaj</h6>';
	echo $mesaj;
	echo '<form action="./msgdel.php?id=' . $id . '" method="POST">';
	echo '<input type="submit" name="delete" value="Sterge">';
	echo '</form><br>';
	echo '</div></center>';
	echo '<hr>';
}
}

include('footer.php');
?>