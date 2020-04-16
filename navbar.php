<?php
include('config.php');
include('session.php');
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedHelp - 3D</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/pagprodus.css">
    <link rel="stylesheet" href="assets/css/categorii.css">
	<link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md">
            <div id="navbar" class="container"><a class="navbar-brand" href='<?php if($SSL == 0) { echo 'http://' . $host; } else { echo 'https://' . $host; } ?>' style="background-image:url(&quot;assets/img/medhelp3d without text.png&quot;);background-size:contain;background-repeat:no-repeat;background-position:center;font-size:40px;color:rgba(0,0,0,0);">LOGO</a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <form class="form-inline navbar-left" method="GET" action="search.php"  id="searchform">
                        <div class="input-group"><span id="basic-addon1" class="input-group-addon"></span><input class="form-control" type="text" name="nume" placeholder="Cauta un Model 3D" aria-describedby="basic-addon1"> <i class="fa fa-search" style="margin-left:10px;margin-top:8px;"></i></div>
                    </form>
                    <ul class="nav navbar-nav ml-auto">
						<li class="nav-item" role="presentation"><a class="nav-link active" href='<?php if($SSL == 0) { echo 'http://' . $host . '/contact.php'; } else { echo 'https://' . $host . '/contact.php'; } ?>'>Contact</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link active" href='<?php if(!isset($_SESSION['login_email'])) { if($SSL == 0) { echo 'http://' . $host . '/login.php'; } else { echo 'https://' . $host . '/login.php'; } } else { if($SSL == 0) { echo 'http://' . $host . '/mesagerie.php'; } else { echo 'https://' . $host . '/mesagerie.php'; } }?>'><?php if(isset($_SESSION['login_email'])) { echo 'Mesagerie'; } else { echo 'Login'; } ?></a></li>
						<?php if(isset($_SESSION['login_email']) && SSL == 0) { echo '<li class="nav-item" role="presentation"><a class="nav-link active" href="http://' . $host . '/logout.php">Logout</a></li>'; } 
						else if(isset($_SESSION['login_email']) && SSL == 1) { echo '<li class="nav-item" role="presentation"><a class="nav-link active" href="https://' . $host . '/logout.php">Logout</a></li>'; } 
						?>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href='<?php if($SSL == 0) { echo 'http://' . $host . '/categorii.php'; } else { echo 'https://' . $host . '/categorii.php'; } ?>'>Categorii</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	<hr>
		<h1 class="text-center text-logo">MedHelp - 3D</h1>
	<hr>
	<br>
    </div>
</body>