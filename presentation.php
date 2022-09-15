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
    <link type="text/css" rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="assets/images/embleme.jpg" rel="icon">
    <title>Wolfhound</title>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>
    <main>
        
        <?php include 'includes/menu_nav.php';?>
        </header>
        <section id="s_presentation">
            <div class="img_presentation">
            </div>
            <div class="texte_presentation">
                <h2 class="titre_presentation">Qui sommes-nous ?</h2>
                <p class="p_presentation">Spécialisé dans la commercialisation de matériel informatique et high-tech,
                    <strong>Wolfhound</strong> est le site de vente en ligne du Groupe Cybertech Computer.
                    Crée en 1996, le groupe compte aujourd’hui une vingtaine de magasins dans toutes la France,
                    ainsi qu’une plateforme logistique adossé à son siège social bordelais.
                    Positionné depuis plus de 20 ans sur le marché de l’informatique particulier et professionnel,
                    <strong>Wolfhound</strong> répond à toute la chaîne des demandes en termes de produits, de configurations ou encore d’assemblages.<br/><br/>
                    Si vous êtes à la recherche du meilleur en terme de matériel informatique,
                    vous êtes à la bonne adresse avec <strong>Wolfhound</strong>. Des produits de qualités à des prix abordables par tous et toutes,
                    <strong>includes/Wolfhound</strong> propose des produits aussi bien pour les amateurs et particuliers que pour les connaisseurs et professionnels.
                    Vous êtes à la recherche d’un ordinateur de bureau de qualité, puissant et performant ? <strong>Wolfhound</strong> a ce qu’il vous faut.
                </p>
            </div>
        </section>
        
    </main>
    <?php include('includes/footer.php'); ?> 
</body>
</html>