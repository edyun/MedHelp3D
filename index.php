<?php
include('mysql.php');
$sql = "SELECT id, nume, poza, link FROM listari ORDER BY id DESC";
$result = mysqli_query($db, $sql);
$id = 0;

$poza = array();
$link = array();
$nume = array();
while($row = mysqli_fetch_array($result))
{
	$nume[$id] = $row["nume"];
	$link[$id] = $row["link"];
	$poza[$id] = $row["poza"];
	$id = $id + 1;
}
include('navbar.php');
?>
<body>
	<h2 class="text-center">Cele mai recente incarcari</h2>
	<br>
	<hr>
    <div style="padding-bottom:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3"><img class="img-fluid" src='<?php echo $poza[0]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[0]; ?>';">
				<a href = <?php echo $link[0]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[0]; ?></h5>
				</a>	
                </div>
                <div class="col-md-3"><img class="img-fluid" src='<?php echo $poza[1]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[1]; ?>';">
				<a href = <?php echo $link[1]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[1]; ?></h5>
				</a>	
                </div>
                <div class="col-md-3"><img class="img-fluid" src='<?php echo $poza[2]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[2]; ?>';">
				<a href = <?php echo $link[2]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[2]; ?></h5>
				</a>	
                </div>
                <div class="col-md-3"><img class="img-fluid" src='<?php echo $poza[3]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[3]; ?>';">
				<a href = <?php echo $link[3]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[3]; ?></h5>
				</a>	
                </div>
            </div>
        </div>
    </div>
    <div style="padding-bottom:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3"><img class="img-fluid" src='<?php echo $poza[4]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[4]; ?>';">
				<a href = <?php echo $link[4]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[4]; ?></h5>
                </div>
				</a>
                <div class="col-md-3"><img class="img-fluid" src='<?php echo $poza[5]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[5]; ?>';">
				<a href = <?php echo $link[5]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[5]; ?></h5>
				</a>	
                </div>
                <div class="col-md-3"><img class="img-fluid" src='<?php echo $poza[6]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[6]; ?>';">
				<a href = <?php echo $link[6]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[6]; ?></h5>
				</a>	
                </div>
                <div class="col-md-3"><img class="img-fluid" src='<?php echo $poza[7]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[7]; ?>';">
				<a href = <?php echo $link[7]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[7]; ?></h5>
				</a>	
                </div>
            </div>
        </div>
    </div>
    <div style="padding-bottom:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3"><img class="img-fluid" src='<?php echo $poza[8]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[8]; ?>';">
				<a href = <?php echo $link[8]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[8]; ?></h5>
				</a>	
                </div>
                <div class="col-md-3"><img class="img-fluid" src='<?php echo $poza[9]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[9]; ?>';">
				<a href = <?php echo $link[9]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[9]; ?></h5>
				</a>	
                </div>
                <div class="col-md-3"><img class="img-fluid" src='<?php echo $poza[10]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[10]; ?>';">
				<a href = <?php echo $link[10]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[10]; ?></h5>
				</a>	
                </div>
                <div class="col-md-3"><img class="img-fluid" src='<?php echo $poza[11]; ?>' style="cursor: pointer;" onclick="window.location='<?php echo $link[11]; ?>';">
				<a href = <?php echo $link[11]; ?> style="color:#ff5960;" >
                    <h5 class="text-center name"><br><?php echo $nume[11]; ?></h5>
				</a>	
                </div>
            </div>
        </div>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="intro"></div>
        </div>
    </div>
	<?php
	include('footer.php');
	?>
	<script type="text/javascript">
window.onscroll = function() 
{
	myFunction()
};
var navbar = document.getElementById("navbar");

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>

</html>