<?php
include('mysql.php');
include('navbar.php');
$id = $_GET["id"];

$query = "SELECT nume, descriere, poza, autor, linkdw FROM listari WHERE id = '$id'";

$result = mysqli_query($db, $query);

while($row = mysqli_fetch_array($result))
{
	$nume = $row["nume"];
	$poza = $row["poza"];
	$descriere = $row["descriere"];
	$autor = $row["autor"];
	$linkdw = $row["linkdw"];
}

?>
<html>

<body>
    <div class="article-dual-column">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="intro">
                        <h1 class="text-center"><?php echo $nume; ?></h1>
                        <p class="text-center"><span class="by">de</span> <a href="#"><?php echo $autor; ?></a></p>
                        <p class="text-center"><img class="img-thumbnail img-fluid" src="<?php echo $poza; ?>"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-3 offset-md-1">
                    <div class="toc">
                        <div class="float-none" style="margin-left:50px;"></div>
                        <ul></ul>
                    </div>
                    <a href=<?php echo $linkdw; ?> download><p class="text-center"><button class="btn btn-primary" type="button" style="background-color:rgba(229,28,36,0.75);font-size:17px;color:#ffffff;"><i class="fa fa-download"></i> Download</button></p></a>
                </div>
                <div class="col-md-10 col-lg-7 offset-md-1 offset-lg-0">
                    <div class="text fontproiect">
                        <p><?php echo $descriere; ?></p>
                        <figure class="figure"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
	include('footer.php');
	?>
</body>

</html>