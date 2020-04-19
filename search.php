<?php
include('mysql.php');
include('navbar.php');


		$numesearch=$_GET['nume']; 
 

$titlupag=$numesearch;
?>

<html>

<body>
	<h2 class="text-center"><?php echo $titlupag; ?></h2>
	<br>
	<hr>
</html>

<?php
if (isset($_GET["page"]))
{
	$pag = $_GET["page"];
}
else
{
	$pag = 1;
}
$recorduri = (($pag - 1) * 12);

$total = "SELECT id, nume, poza, link FROM listari WHERE nume LIKE '%" . $numesearch . "%'";
$sql = "SELECT id, nume, poza, link FROM listari WHERE nume LIKE '%" . $numesearch . "%' ORDER BY id DESC LIMIT $recorduri, 12";

$result = mysqli_query($db, $sql) or die( mysqli_error($db));
$resulttotal = mysqli_query($db, $total) or die( mysqli_error($db));
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

?>

<html>
    <div style="padding-bottom:10px;">
        <div class="container">
            <div class="row">
				<?php
				if(array_key_exists(0,$link) && array_key_exists(0,$nume))
				{
					echo '<div class="col-md-3 col-lg-3"><img class="img-fluid" src=' . $poza[0] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[0] . "'" .  ';">';
					echo '<a href ="' . $link[0] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[0] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
				<?php
				if(array_key_exists(1,$link) && array_key_exists(1,$nume))
				{
					echo '<div class="col-md-3"><img class="img-fluid" src=' . $poza[1] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[1] . "'" .  ';">';
					echo '<a href =' . $link[1] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[1] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
				<?php
				if(array_key_exists(2,$link) && array_key_exists(2,$nume))
				{
					echo '<div class="col-md-3"><img class="img-fluid" src=' . $poza[2] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[2] . "'" .  ';">';
					echo '<a href =' . $link[2] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[2] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
				<?php
				if(array_key_exists(3,$link) && array_key_exists(3,$nume))
				{
					echo '<div class="col-md-3"><img class="img-fluid" src=' . $poza[3] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[3] . "'" .  ';">';
					echo '<a href =' . $link[3] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[3] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
            </div>
        </div>
    </div>
    <div style="padding-bottom:10px;">
        <div class="container">
            <div class="row">
				<?php
				if(array_key_exists(4,$link) && array_key_exists(4,$nume))
				{
					echo '<div class="col-md-3 col-lg-3"><img class="img-fluid" src=' . $poza[4] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[4] . "'" .  ';">';
					echo '<a href =' . $link[4] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[4] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
				<?php
				if(array_key_exists(5,$link) && array_key_exists(5,$nume))
				{
					echo '<div class="col-md-3"><img class="img-fluid" src=' . $poza[5] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[5] . "'" .  ';">';
					echo '<a href =' . $link[5] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[5] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
				<?php
				if(array_key_exists(6,$link) && array_key_exists(6,$nume))
				{
					echo '<div class="col-md-3"><img class="img-fluid" src=' . $poza[6] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[6] . "'" .  ';">';
					echo '<a href =' . $link[6] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[6] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
				<?php
				if(array_key_exists(7,$link) && array_key_exists(7,$nume))
				{
					echo '<div class="col-md-3"><img class="img-fluid" src=' . $poza[7] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[7] . "'" .  ';">';
					echo '<a href =' . $link[7] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[7] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
            </div>
        </div>
    </div>
    <div style="padding-bottom:10px;">
        <div class="container">
            <div class="row">
				<?php
				if(array_key_exists(8,$link) && array_key_exists(8,$nume))
				{
					echo '<div class="col-md-3 col-lg-3"><img class="img-fluid" src=' . $poza[8] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[8] . "'" .  ';">';
					echo '<a href =' . $link[8] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[8] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
				<?php
				if(array_key_exists(9,$link) && array_key_exists(9,$nume))
				{
					echo '<div class="col-md-3"><img class="img-fluid" src=' . $poza[9] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[9] . "'" .  ';">';
					echo '<a href =' . $link[9] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[9] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
				<?php
				if(array_key_exists(10,$link) && array_key_exists(10,$nume))
				{
					echo '<div class="col-md-3"><img class="img-fluid" src=' . $poza[10] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[10] . "'" .  ';">';
					echo '<a href =' . $link[10] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[10] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
				<?php
				if(array_key_exists(11,$link) && array_key_exists(11,$nume))
				{
					echo '<div class="col-md-3"><img class="img-fluid" src=' . $poza[11] . ' style="cursor: pointer;" onclick="window.location=' . "'" . $link[11] . "'" .  ';">';
					echo '<a href =' . $link[11] . '" style="color:#ff5960;" >';
				
                    echo '<center><h5 class="text-center name"><br>' . $nume[11] . '</h5></center>';
					echo '</a>';
					echo '</div>';
				}
				else
				{
					if($SSL == 0) 
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  http://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					} 
					else
					{
						echo '<div class="col-md-3"><img class="img-fluid" src="  https://' . $host . '/assets/img/vaurma.jpg"';
						echo '<center><h5 class="text-center name" ><br>  </h5></center>';
						echo '</div>';
					}
				}
				?>
            </div>
        </div>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="intro"></div>
        </div>
    </div>
		<div><center>
	<hr>
	<?php
	if($pag > 1)
	{
		$paganterioara = $pag - 1;
		if($SSL == 0)
		{
			echo '<a href=http://' . $host . '/search.php?nume=' . $numesearch . '&page=' . $paganterioara . ' " style="font-weight:bold; color:#ff5960;">Pagina Anterioara</a>';
		}
		else
		{
			echo '<a href=https://' . $host . '/search.php?nume=' . $numesearch . '&page=' . $paganterioara . ' " style="font-weight:bold; color:#ff5960;">Pagina Anterioara</a>';
		}
	}
	echo '  |  ';
	if(mysqli_num_rows($resulttotal) > ($pag * 12))
	{
		$pagurmatoare = $pag + 1;
		if($SSL == 0)
		{
			echo '<a href=http://' . $host . '/search.php?nume=' . $numesearch . '&page=' . $pagurmatoare . ' " style="font-weight:bold; color:#ff5960;">Pagina Urmatoare</a>';
		}
		else
		{
			echo '<a href=https://' . $host . '/search.php?nume=' . $numesearch . '&page=' . $pagurmatoare . ' " style="font-weight:bold; color:#ff5960;">Pagina Urmatoare</a>';
		}
	}
	?>
	</center>
	</div>
	<?php
	include('footer.php');
	?>
</body>

</html>
