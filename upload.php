<?php
include('navbar.php');
include('session.php');




$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fisierDeIncarcat"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fisierDeIncarcat"]["tmp_name"]);
    if($check !== false) {
        echo "Fisierul este o imagine - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Fisierul nu este o imagine.";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "Ne pare rau dar acest fisier exista deja.";
    $uploadOk = 0;
}
if ($_FILES["fisierDeIncarcat"]["size"] > 500000) {
    echo "Ne pare rau dar fisierul tau este prea mare.";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Ne pare rau dar acceptam doar tipurile de fisiere PNG, JPG, JPEG si GIF.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Ne pare rau dar fisierul tau nu a fost incarcat.";
} else {
    if (move_uploaded_file($_FILES["fisierDeIncarcat"]["tmp_name"], $target_file)) {
        echo "Fisierul ". basename( $_FILES["fisierDeIncarcat"]["name"]). " a fost incarcat.";
    } else {
        echo "Ne pare rau dar a aparut o eroare in timpul incarcarii.";
    }
}


?>
<body>
    <div class="contact-clean">
        <form method="post" enctype="multipart/form-data">
		<div class="outline">
            <h2 class="text-center">Incarca un asset pe MedHelp3D!</h2>
            <div class="form-group"><input class="form-control" type="text" name="nume" placeholder="Nume asset"></div>
			<hr>
			<center><h6>Poza</h6></center><input type="file" id="fisierDeIncarcat" name="fisierDeIncarcat">
			<hr>
			<center><h6>Arhiva modele</h6></center><input type="file" id="fisierDeIncarcat" name="fisierDeIncarcat">
			<hr>
            <div class="form-group"><textarea class="form-control" rows="14" name="mesaj" placeholder="Descriere"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color:rgba(229,28,36,0.56);">Trimite</button></div>
		</div>
        </form>
    </div>
</body>



<?php



include('footer.php');
?>