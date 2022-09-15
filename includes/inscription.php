<?php
if(isset($_POST['send'])){

				extract($_POST);
			
					if (!empty($password) && !empty($cpassword) && !empty($email)) {
						
						if ($password == $cpassword) {
							$options = [
    							'cost' => 12,
								];
						    $hashmdp = password_hash($password, PASSWORD_BCRYPT, $options);

						    
						    $conf = $db ->prepare("SELECT email from users WHERE email = :email");
						    $conf->execute(['email'=> $email]);
						    $result = $conf->rowCount();

						    if ($result == 0) {
						    	// code...
						    
							    $q = $db->prepare("INSERT INTO users(email,mdp) VALUES (:email, :mdp)");
							    $q->execute([

					  				'email' => $email,
					  				'mdp' => $hashmdp

		  						]);
		  						echo "le compte a été crée ";
							}else{
								echo "l'email existe déjà ";
							}
						}else{
							echo "Veuillez entrer 2 mots de passes identiques ";
						}
					
				}
			}


?>