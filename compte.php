<?php 
  session_start();

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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/images/embleme.jpg" rel="icon">
    <title>Wolfhound</title>
    <link type="text/css" rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 

</head>
<body>
    <main>
     
      <?php include 'includes/menu_nav.php'; ?>
        
        <section id="s_contact">
            
            <div class="container">
                <form method="post">">
                <div class="row">
                  <div class="col-25">
                      <label for="f_pseudo">Pseudo: </label>
                  </div>
                  <div class="col-25">

                    <?php
                      if(isset($_SESSION['pseudo']))
                      { 
                        ?>
                       <input type="text" id="f_pseudo" name="f_pseudo" value="<?php echo $_SESSION['pseudo']?>"> 
                       <?php
                      }else
                      {
                        ?>
                        <input type="text" id="f_pseudo" name="f_pseudo" placeholder="Votre Pseudo..">
                        <?php
                      }
                      ?>

                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                      <label for="f_nom">Nom : </label>
                  </div>
                  <div class="col-25">

                  <?php
                      if(isset($_SESSION['nom']))
                      { 
                        ?>
                       <input type="text" id="f_nom" name="f_nom" value="<?php echo $_SESSION['nom']?>"> 
                       <?php
                      }else
                      {
                        ?>
                        <input type="text" id="f_nom" name="f_nom" placeholder="Votre nom..">
                        <?php
                      }
                      ?>
                      
                  </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="f_prenom">Prénom : </label>
                  </div>
                  <div class="col-25">
                    
                  <?php
                      if(isset($_SESSION['prenom']))
                      { 
                        ?>
                       <input type="text" id="f_prenom" name="f_prenom" value="<?php echo $_SESSION['prenom']?>"> 
                       <?php
                      }else
                      {
                        ?>
                        <input type="text" id="f_prenom" name="f_prenom" placeholder="Votre prénom..">
                        <?php
                      }
                      ?>
                   
                  </div>
                </div>
                <div class="row">
                    <div class="col-25">
                         <label for="f_email">Email : </label>
                    </div>
                    <div class="col-25">

                    <?php
                      if(isset($_SESSION['email']))
                      { 
                        ?>
                       <input type="email" id="email" name="email" value= <?=  $_SESSION['email']?>>
                       <?php
                      }else
                      {
                        ?>
                        <input type="email" id="email" name="email" placeholder="Votre email">
                        <?php
                      }
                      ?>
                         
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                         <label for="f_tel">Téléphone : </label>
                    </div>
                    <div class="col-25">

                    <?php
                      if(isset($_SESSION['telephone']))
                      { 
                        ?>
                       <input type="text" id="f_tel" name="f_tel" value= <?=  $_SESSION['telephone']?>>
                       <?php
                      }else
                      {
                        ?>
                        <input type="tel" id="f_tel" name="f_tel" placeholder="Votre numéro de téléphone..">
                        <?php
                      }
                      ?>
                         
                    </div>
    </div>
                <div class="row" >
                  <input  type="submit" name ="changer" id="changer" value="Changer">
                  <input href="test.php" type="submit" name ="supprimer" id="supprimer" value="Supprimer le compte">

                </div>
                </form>
              </div>
        </section>
        <?php include 'includes/deleteusers.php';?>
        <?php include 'includes/updateusers.php';?>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>