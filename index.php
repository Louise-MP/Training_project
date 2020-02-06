<?php


include('php/dbConnect.php');

// Si la variable "$_Post" contient des informations alors on les traitres
if(!empty($_POST))
{
	extract($_POST);
	$valid = true;

	// On se place sur le bon formulaire grâce au "name" de la balise "input"
	if (isset($_POST['submit']))
	{
		$username  = htmlspecialchars($_POST['username']); // On récupère le nom
		$email = htmlspecialchars($_POST['email']); // On récupère le mail
		$pass = md5($_POST['pass']); // On récupère le mot de passe 
	

		// Vérification du prénom
		if(empty($username))
		{
			$valid = false;
			$er_username = ("Please enter your username");
		}

		// Vérificaton du mail
		if(empty($email))
		{
			$valid = false;
			$er_mail = "Please enter your email";
			

		// On vérifit que le mail est dans le bon format
		}
		elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $email))
		{
			$valid = false;
			$er_mail = "Invalid email";
			
		}
		// else
		// {
		// 	// On vérifie que le mail est disponible
		// 	$req_mail = "SELECT * FROM members WHERE mail = ?";
        //     $dbprepare=$connexion->prepare($req_mail);
		// 	$result=$dbprepare->execute(array($email));
							
				
		// 	if ($req_mail['email'] <> "")
		// 	{
		// 		$valid = false;
		// 		$er_mail = "This email already exist";
		// 	}
		// }

		// Vérification du mot de passe
		if(empty($pass))
		{
			$valid = false;
			$er_pass = "Please enter the password";
		}

		// Si toutes les conditions sont remplies alors on fait le traitement
		if($valid)
		{



			// On insert nos données dans la table members
			$sql = "INSERT INTO members(username,mail,password) VALUES(?, ?, ?)"; /* créer la requete */
			$dbprepare=$connexion->prepare($sql); /* prepare la bdd a recevoir la requete */
			$result=$dbprepare->execute([$username,$email,$pass]);
			
			header('Location: php/login.php');
			exit;
		}
	}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign in</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method='POST'>

					<?php

					// S'il y a une erreur sur le nom alors on affiche
					
					if (isset($er_username)){
						
						?>

	                    <div><?= $er_username ?></div>

						<?php
						}
						?>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>

						<?php

						if (isset($er_mail)){

						?>

                    	<div><?= $er_mail ?></div>

						<?php
						}
						?>

						<input class="input100" type="email" name="email" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>

						<?php
						if (isset($er_pass))
						{
						?>

                    <div><?= $er_pass ?></div>
						<?php
						}
						?>


						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Sign In
						</button>
					</div>
						<br><br>
						<a href="php/login.php">Do you have an account?</a>
				
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>