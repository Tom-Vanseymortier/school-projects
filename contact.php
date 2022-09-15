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
            <div class="texte_contact">
                Vous avez une question sur un produit ou vous avez une idée de projet ?
                Alors n'hésiter pas à nous contacter avec le formulaire ci-dessous.
            </div>
            <div class="container">
                <form action="mailto:tomneus2209@gmail.com">
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
                <div class="row">
                  <div class="col-25">
                    <label for="pays">Pays</label>
                  </div>
                  <div class="col-25">
                    <select id="pays" name="pays">
                      <option value="belgique">Belgique</option>
                      <option value="france">France</option>
                      <option value="autre">Autre</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-25">
                    <label for="comm">Commentaire</label>
                  </div>
                  <div class="col-75">
                    <textarea id="comm" name="comm" placeholder="Ecrivez votre commentaire.." style="height:200px"></textarea>
                  </div>
                </div>
                <div class="row" >
                  <input  type="submit" name ="submit" id="submit" value="Envoyer">

                    <input type="reset" name="reset" id="reset" value="Annuler">
                </div>
                </form>
              </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>