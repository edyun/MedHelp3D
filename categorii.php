<html>
<?php
include('navbar.php');
?>
<body>
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Categorii</h2>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src='<?php if($SSL == 0) { echo 'http://' . $host . '/assets/img/Ventilatoare.png'; } else { echo 'https://' . $host . '/assets/img/Ventilatoare.png'; } ?>' style="width: 50px; height: 60px;" style="cursor: pointer;" onclick="window.location='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=1'; } else { echo 'https://' . $host . '/categ.php?id=1'; } ?>';"></img>
                        <a href ='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=1'; } else { echo 'https://' . $host . '/categ.php?id=1'; } ?>' style="color:black;" ><h3 class="name">Ventilatoare artificiale</h3></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src='<?php if($SSL == 0) { echo 'http://' . $host . '/assets/img/vizor.png'; } else { echo 'https://' . $host . '/assets/img/vizor.png'; } ?>' style="width: 60px; height: 60px;" style="cursor: pointer;" onclick="window.location='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=2'; } else { echo 'https://' . $host . '/categ.php?id=2'; } ?>';"></img>
                        <a href ='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=2'; } else { echo 'https://' . $host . '/categ.php?id=2'; } ?>' style="color:black;" ><h3 class="name">Ochelari / Protectie pentru fata</h3></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src='<?php if($SSL == 0) { echo 'http://' . $host . '/assets/img/alte_echipamente.png'; } else { echo 'https://' . $host . '/assets/img/alte_echipamente.png'; } ?>' style="width: 50px; height: 60px;" style="cursor: pointer;" onclick="window.location='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=3'; } else { echo 'https://' . $host . '/categ.php?id=3'; } ?>';"></img>
                        <a href ='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=3'; } else { echo 'https://' . $host . '/categ.php?id=3'; } ?>' style="color:black;" ><h3 class="name">Alte echipamente de protectie</h3></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src='<?php if($SSL == 0) { echo 'http://' . $host . '/assets/img/casca.png'; } else { echo 'https://' . $host . '/assets/img/casca.png'; } ?>' style="width: 50px; height: 60px;" style="cursor: pointer;" onclick="window.location='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=4'; } else { echo 'https://' . $host . '/categ.php?id=4'; } ?>';"></img>
                        <a href ='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=4'; } else { echo 'https://' . $host . '/categ.php?id=4'; } ?>' style="color:black;" ><h3 class="name">Casti de protectie</h3></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src='<?php if($SSL == 0) { echo 'http://' . $host . '/assets/img/masca.png'; } else { echo 'https://' . $host . '/assets/img/masca.png'; } ?>' style="width: 60px; height: 60px;" style="cursor: pointer;" onclick="window.location='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=5'; } else { echo 'https://' . $host . '/categ.php?id=5'; } ?>';"></img>
                        <a href ='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=5'; } else { echo 'https://' . $host . '/categ.php?id=5'; } ?>' style="color:black;" ><h3 class="name">Masti complete</h3></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><img src='<?php if($SSL == 0) { echo 'http://' . $host . '/assets/img/altele.png'; } else { echo 'https://' . $host . '/assets/img/altele.png'; } ?>' style="width: 50px; height: 60px;" style="cursor: pointer;" onclick="window.location='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=6'; } else { echo 'https://' . $host . '/categ.php?id=6'; } ?>';"></img>
                        <a href ='<?php if($SSL == 0) { echo 'http://' . $host . '/categ.php?id=6'; } else { echo 'https://' . $host . '/categ.php?id=6'; } ?>' style="color:black;" ><h3 class="name">Altele</h3></a>
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