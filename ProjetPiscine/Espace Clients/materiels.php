

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
                        <li><a href="tout_parcourir.php">Tout parcourir</a></li>
                       

                    </ul>
            </header>

            <section>

							                <h2> Le matériel scolaire : <?php



							$tel = isset ($_POST["tel"])? $_POST["tel"] : "";
							$adresse = isset ($_POST["adresse"])? $_POST["adresse"] : "";
							$mail = isset ($_POST["mail"])? $_POST["mail"] : "";


							$database = "siteweb";

							$db_handle = mysqli_connect('localhost', 'root', 'root' );
							$db_found = mysqli_select_db($db_handle, $database); ?>


							<?php if ($db_found) 

												{

													
												 $sql = " SELECT nom, photo, description FROM articles WHERE catégorie_id='2' ";
												 

												 $result = mysqli_query($db_handle, $sql);


												 while ($data = mysqli_fetch_assoc($result)) 

												 { ?>

												 	
												 	<p> <?= $data['nom']; ?></p>
												 	<p> <?= $data['photo']; ?></p>
												 	<p> <?= $data['description']; ?></p>

												 <?php

												



												 }//end while

												}//end if
												//si le BDD n'existe pas
												else {
												 echo "Database not found";
												}//end else
												//fermer la connection
												mysqli_close($db_handle);
									?>

						</h2>

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
			