
<link type="text/css" rel="stylesheet" href="assets/css/main.css">
 <figure id="logo">
          <img src="assets/images/embleme3.jpg" alt="Wolfhound">
</figure>
<nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="presentation.php" class="active">Qui sommes-nous ?</a></li>
                <li><a href="gallerie.php">Galerie</a></li>
                <li><a href="contact.php">Contact</a></li>
               <?php 
               if(isset($_SESSION['email']))
               {
                 if(isset($_SESSION['pseudo']))
                 {
                 echo"<li><a href='compte.php'>Bonjour ".$_SESSION['pseudo']."</a></li>";
                 }else
                 {
                  echo"<li><a href='compte.php'>Bonjour ".$_SESSION['email']."</a></li>";
                 }
               }else
               {
                echo"<li><a href='test.php'>Inscription/Connexion</a></li>";
               } 
               
               ?>
                <li><a href="test.php?deconnexion=true'">Deconnexion</a></li>
            </ul>
 </nav>