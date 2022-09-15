<?php
	if(isset($_POST['lsend']))
	{
		extract($_POST);
		if (!empty($copassword) && !empty($coemail)) 
		{

			$q = $db->prepare("SELECT * FROM users WHERE email = :email");
			$q->execute(['email'=> $coemail]);
			$result = $q->fetch();

			if($result == true)
			{

				
				$hashmdp = $result['mdp'];
				if(password_verify($copassword, $hashmdp))
				{
					$_SESSION['email'] = $result['email'];
					$_SESSION['date'] = $result['date'];
					$_SESSION['nom'] = $result['nom'];
					$_SESSION['pseudo'] = $result['pseudo'];
					$_SESSION['prenom'] = $result['prenom'];
					$_SESSION['telephone'] = $result['telephone'];
				}else 
				{
					echo"le mot de passe est incorrect";
				}
			}else
			{
				echo"le compte portant l'email ".$coemail." n'existe pas";
			}
		}

	}



?>