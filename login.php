<html>
<?php
include('navbar.php');

	//include("session.php");
   require("mysql.php");
   session_start();
if(!isset($_SESSION['login_email']))
{
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myemail = $_POST['email'];
      $mypassword = $_POST['password']; 
	  $passw = hash("whirlpool", $mypassword); 
	  
      $querylogin = "SELECT * FROM users WHERE email = '$myemail' and parola = '$passw'";
      $resultlogin = mysqli_query($db,$querylogin) or die( mysqli_error($db));
      
      $countlogin = mysqli_num_rows($resultlogin);
      
      if($countlogin == 1) {
         $_SESSION['login_email'] = $myemail;
         header("location: mesagerie.php");
      }
   }

}
else
{
	   header("location: mesagerie.php");
}
?>

<body>
    <div class="login-clean">
        <form method="post" action="" style="padding-top:0px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Parola"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Ai uitat email-ul sau parola?</a></form>
			<?php
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				$myemail = $_POST['email'];
				$mypassword = $_POST['password']; 
				$passw = hash("whirlpool", $mypassword); 
	  
				$querylogin = "SELECT * FROM users WHERE `email` = '$myemail' and `parola` = '$passw'";
				$resultlogin = mysqli_query($db,$querylogin) or die( mysqli_error($db));
      
				$countlogin = mysqli_num_rows($resultlogin) or die(mysqli_error);
				if($countlogin == 0)
				{
					echo "E-Mail-ul sau parola este incorecta";
				}
				else
				{
					header("location: mesagerie.php");
				}
			}
		?>
	</div>
<?php
include('footer.php');
?>
</body>

</html>