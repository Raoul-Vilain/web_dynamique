<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="page_princip.css" />
        <title>ECE Market Place </title>
    </head>


    

    <body>
        <div class="wrapper">
            <header>
                
                    
                    <div id="logo">


                        <img src="img/logo_ece_min.png" alt="logo du site"/><br>
                       

                    </div>
                    <div id="titre_principal">
                    <h1>ECE Market Place  </h1>
                    </div>
                

                    <ul id="nav">

                        <li><a href="page_princip.php">Retour</a></li>
                        
                    </ul>
            </header>

            <section> 

				<?php


						$nom = isset ($_POST["nom"])? $_POST["nom"] : "";
						$prenom = isset ($_POST["prenom"])? $_POST["prenom"] : "";
						$pseudo = isset ($_POST["pseudo"])? $_POST["pseudo"] : "";
						$email = isset ($_POST["email"])? $_POST["email"] : "";


						$database = "siteweb";

						$db_handle = mysqli_connect('localhost', 'root', 'root' );
						$db_found = mysqli_select_db($db_handle, $database); 




								 if ($db_found) 

											{

												
											 $sql = " SELECT * FROM vendeur ";
											 

											 $result = mysqli_query($db_handle, $sql);


											 while ($data = mysqli_fetch_assoc($result)) 

										     { ?>



											 	<p> Vendeur : <?= $data['pseudo']; ?> </p>
											 	<p> <?= $data['email']; ?></p>
											 	<p> <?= $data['nom']; ?></p>
											 	<p> <?= $data['prenom']; ?></p>
											 	<br><br>

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


