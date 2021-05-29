<?php


$categorie1=isset($_POST["categorie1"])? $_POST["categorie1"] : "";
$categorie2=isset($_POST["categorie2"])? $_POST["categorie2"] : "";
$categorie3=isset($_POST["categorie3"])? $_POST["categorie3"] : "";

$database="siteweb";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if (isset($_POST['bouton1'])) { if ($db_found) {

  if (isset($_POST['accessoirevip'])) {$sql="UPDATE ";}

  if (isset($_POST['materielscolaire'])) {}

  if (isset($_POST['objetdart'])) {}

   }
}

?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="notifications.css" />
        <title>ECE Market Place - Notifications</title>
    </head>


    

    <body>
        <div class="wrapper">
            <header>
                
                    
                    <div id="logo">

                        <img src="img/logo_ece_min.png" alt="logo du site"/><br>
                        <a href="connexion.html">SE CONNECTER</a>

                    </div>
                    <div id="titre_principal">
                    <h1>ECE Market Place</h1>
                    </div>
                

                    <ul id="nav">
                       
                        <li><a href="page_princ.php">Accueil</a></li>
                        <li><a href="tout_parcourir.php">Tout Parcourir</a></li>
                        <li><a href="panier.php">Panier</a></li>
                        <li><a href="votre_compte.html">Votre Compte</a></li>
                    </ul>
            </header>

            <section>

                <h2> Sélectionner les catégories pour lesquelles vous voulez recevoir une notification ! </h2>


                
                <form action="" method="post">
                  <div>
                    
                    <input type="checkbox" id="accessoirevip" name="accessoirevip"
                                     checked>
                              <label for="accessoirevip">Accessoire VIP</label>
                    </div>

                    <div>
                              <input type="checkbox" id="materielscolaire" name="materielscolaire">
                              <label for="materielscolaire">Matériel Scolaire</label>
                     </div>

                     <div>
                              <input type="checkbox" id="objetdart" name="objetdart">
                              <label for="objetdart">Objet d'art</label>
                     </div>
                           

                     <div><button type="submit" name ="bouton1" value ="soumettre">Valider ! </button></div></form>
                
            </section>

            <footer>
                          <h3>ECE Market Place :</h3> 
                    <li>Mail : ecemarket@edu.ece.fr</li>
                    <li>Téléphone : 0117174206</li>
                    <li>Adresse : 15 Avenue des Champs-Elysées, 75008 Paris</li>
            </footer>

        </div>

    </body>
</html>



