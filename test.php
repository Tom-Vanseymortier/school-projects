<?php session_start(); 
	   if(isset($_GET['deconnexion']))
	   { 
		  if($_GET['deconnexion']==true)
		  {  
			 session_unset();
			 header("location:test.php");
		  }
	   }

	   
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/images/embleme.jpg" rel="icon">
   
    <link type="text/css" rel="stylesheet" href="assets/css/Style_log.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 

	<title>Login </title>
</head>
<body>

	

	<?php include 'includes/menu_nav.php';
		  include 'includes/DB_connect.php';
		  global $db;
	?>
	

	

	   <div id="conteneur">
		   <div class="login">
		   <h1> Login/Signin </h1>
		   <h2>Se connecter </h2>
			<form method="post">
				<input type="email" name="coemail" id ="coemail" placeholder="Votre email" required>
				<br>

				<input type="password" name="copassword" id ="copassword" placeholder="Votre mot de passe" required>
				<br>

				<input type="submit" name="lsend" id= "login" value="Se connecter">

			</form>
			</div>
	
		<?php include "includes/login.php";?>


	
	   	<div class="inscription">
		   <h2>S'inscrire</h2>
			<form method="post">
				<input type="email" name="email" id ="email" placeholder="Votre email" required>
				<br>
				<input type="password" name="password" id ="password" placeholder="Votre mot de passe" required>
				<br>
				<input type="password" name="cpassword" id ="cpassword" placeholder="Confirmer votre mot de passe" required>
				<br>
				<input type="submit" name="send" id= "send" value="S'inscrire">

			</form>

			<?php include "includes/inscription.php"; ?>
	   	</div>
	</div>
			

			
</body>
</html>
