<?php 
  session_start();

?> 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="assets/images/embleme.jpg" rel="icon">
    <title>Wolfhound</title>
</head>
<body>
    <main>
        

        <?php include('includes/menu_nav.php'); ?>
        
        <section id="s_gallerie">
            <div class="texte_gallerie">
            Voici quelques projets déjà réalisés et qui vous donneront peut-être des idées.<br/>
                Le prix est à titre informatif et peut évidemment être modifié en fonction des composants choisis.
            </div>
                <div class="section group">
                    <div class="image-3">
                        <img src="assets/images/Gallerie/kheops.jpg" alt = "Kheops">
                        <img src="assets/images/Gallerie/Warthug.jpg" alt = "Warthug">
                        <img src="assets/images/Gallerie/Level9.jpg" alt = "Level 9">
                    </div>
                   
            </div>
        </section>
    </main>
    <?php include('includes/footer.php'); ?>   
</body>
</html>