<?php
include 'includes/DB_connect.php';
global $db;
if(isset($_POST['changer'])){

	extract($_POST);
			
	if (!empty($email)) {
						
		
						    
		 $conf = $db ->prepare("SELECT email from users WHERE email = :email");
		 $conf->execute(['email'=> $email]);
		 $resultat = $conf->rowCount();
		 

		 if ($resultat > 0) {
						    	// code...
		    $q = $db->prepare("UPDATE users SET nom = :nom, prenom = :prenom, pseudo = :pseudo, telephone = :telephone WHERE email = :email");
			$q->execute([
             'email' => $email,
			 'nom' => $f_nom,
			 'prenom' => $f_prenom,
             'pseudo' => $f_pseudo,
             'telephone' => $f_tel

		  		]);

				  $q = $db->prepare("SELECT * FROM users WHERE email = :email");
				  $q->execute(['email'=> $email]);
				  $result =$q->fetch();

				  	$_SESSION['nom'] = $result['nom'];
					$_SESSION['pseudo'] = $result['pseudo'];
					$_SESSION['prenom'] = $result['prenom'];
					$_SESSION['telephone'] = $result['telephone'];  

		  		    echo "le changement a été effectuer avec succès ";
				}else{
				    echo "le compte n'existe pas ";
					}
			
			}
					
		}


?>