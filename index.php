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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="assets/images/embleme.jpg" rel="icon">
    <title>Wolfhound</title>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>
    <main>
        

        <?php include('includes/menu_nav.php');?>

        <section id="s_accueil">
            <div class="texte_accueil">
                <h2><mark><strong>Venez découvrir nos tours et qui nous sommes</strong></mark> </h2>
                <a href="presentation.php" class="button-1">Par ici</a>               
            </div> 
        </section>
        
    </main>
    <?php include('includes/footer.php'); ?>        
</body>
</html>