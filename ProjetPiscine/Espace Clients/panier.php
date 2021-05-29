<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="panier.css" />
        <title>ECE Market Place - Panier</title>
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
                        <div id="current"><li><a href="panier.php">Panier</a></li></div>
                        <li><a href="page_princ.php">Accueil</a></li>
                       

                    </ul>
            </header>

            <section>

                <h2>Votre panier :

                          <?php


                                        $nom = isset ($_POST["nom"])? $_POST["nom"] : "";
                                        $prenom = isset ($_POST["prenom"])? $_POST["prenom"] : "";
                                        $photo = isset ($_POST["photo"])? $_POST["photo"] : "";



                                        $database = "siteweb";

                                        $db_handle = mysqli_connect('localhost', 'root', 'root' );
                                        $db_found = mysqli_select_db($db_handle, $database);
                                         //si le BDD existe, faire le traitement
                                        if ($db_found) 

                                        {

                                            
                                         $sql = " 
                                            
                                                    SELECT client.prenom, articles.nom, articles.photo FROM panier

                                                        INNER JOIN client ON panier.client_id = client.id
                                                        INNER JOIN articles ON articles.panier_id = panier.id
                                                        WHERE client.prenom='Lea'; ";
                                         

                                         $result = mysqli_query($db_handle, $sql);


                                         while ($data = mysqli_fetch_assoc($result)) 

                                         {
                                         echo "<br>Article : " . $data['nom'] . '<br>';
                                      
                                         echo "<br>photo :" . $data['photo'] . '<br>';
                                         '<br>';


                                         }

                                         $sql="SELECT SUM(prix) AS prixtotal FROM panier WHERE client_id = '3'";
                                         $result=mysqli_query($db_handle, $sql);

                                          while ($data = mysqli_fetch_assoc($result)) {echo "Le prix total de votre panier est de " . $data['prixtotal'] . "euros :) " . '<br>';}


                                        }//end if
                                        //si le BDD n'existe pas
                                        else {
                                         echo "Database not found";
                                        }//end else
                                        //fermer la connection
                                        mysqli_close($db_handle);
                                        ?></h2>

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

