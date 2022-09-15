
        <?php
            
            
           
            try{
                $db = new PDO('mysql:host=localhost;dbname=web1;', 'root', '');
                //On définit le mode d'erreur de PDO sur Exception
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            }
           
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }

        
        ?>
   