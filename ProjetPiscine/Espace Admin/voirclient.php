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




								$database = "siteweb";

								$db_handle = mysqli_connect('localhost', 'root', 'root' );
								$db_found = mysqli_select_db($db_handle, $database);
								 //si le BDD existe, faire le traitement
								if ($db_found) 

								{

									
								 $sql = " SELECT client.nom, client.prenom, client.login, coordlivraison.adresse1, coordlivraison.ville, coordonnéesbancaires.cvv, coordonnéesbancaires.numerocar, coordonnéesbancaires.type FROM client 
									INNER JOIN coordlivraison ON coordlivraison.client_id= client.id INNER JOIN coordonnéesbancaires ON coordonnéesbancaires.client_id=client.id; ";
								 

								 $result = mysqli_query($db_handle, $sql);


								 while ($data = mysqli_fetch_assoc($result)) 

								 {
								 echo "nom: " . $data['nom'] . '<br>';
								 echo "prénom:" . $data['prenom'] . '<br>';
								 echo "login: " . $data['login'] . '<br>';
								 echo "adresse1: " . $data['adresse1'] . '<br>';
								 echo "ville:" . $data['ville'] . '<br>';
								 echo "cvv:" . $data['cvv'] . '<br>';
								 echo "numero:" . $data['numerocar'] . '<br>';
								 echo "type:" . $data['type'] . '<br>';

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