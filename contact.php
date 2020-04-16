<?php
include('navbar.php');
include('mysql.php');

if(isset($_POST["nume"]) && isset($_POST["email"]) && isset($_POST["mesaj"]))
{
	$nume = $_POST["nume"];
	$email = $_POST["email"];
	$mesaj = $_POST["mesaj"];
	$sql = "INSERT INTO mesaje (nume,email,mesaj) VALUES ('$nume', '$email', '$mesaj')";
	$result = mysqli_query($db, $sql);
}
?>
<body>
    <div class="contact-clean">
        <form method="post">
		<div class="outline">
            <h2 class="text-center">Trimite-ne un mesaj!</h2>
            <div class="form-group"><input class="form-control" type="text" name="nume" placeholder="Nume"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"><!--<small class="form-text text-danger">Te rugam sa introduci o adresa corecta de Email!</small>--></div>
            <div class="form-group"><textarea class="form-control" rows="14" name="mesaj" placeholder="Mesaj"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color:rgba(229,28,36,0.56);">Trimite</button></div>
		</div>
        </form>
    </div>
</body>
<?php
include('footer.php');
?>

</html>