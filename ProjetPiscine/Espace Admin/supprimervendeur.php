
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
            	<h2>Vous vous appretez à supprimer un vendeur ! </h2>

				<form action="" method="post">
				<table>
				<tr>
				<td>email:</td>
				<td><input type="text" name="email"></td>
				</tr>
				<tr>
				<td>pseudo:</td>
				<td><input type="text" name="pseudo"></td>
				</tr>
				<tr>
				<td>nom:</td>
				<td><input type="text" name="nom"></td>
				</tr>

				<tr>
				<td colspan="2" align="center">
				 <input type="submit" name="button2" value="supprimer"></td>
				</tr>
				</table>
				</form>


			<?php



						$email = isset($_POST["email"])? $_POST["email"] : "";
						$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
						$nom = isset($_POST["nom"])? $_POST["nom"] : "";


						$database = "siteweb";


						$db_handle = mysqli_connect('localhost', 'root', 'root');
						$db_found = mysqli_select_db($db_handle, $database);
												

												if (isset($_POST["button2"])) 


										{

																	if ($db_found) 

																	{


																	$sql = "SELECT * FROM vendeur";
																	if ($nom != "") {
																	$sql .= " WHERE nom LIKE '%$nom%'";
																	if ($pseudo != "") {
																	$sql .= " AND pseudo LIKE '%$pseudo%'";
																	if ($email != "") {$sql .= " AND email LIKE '%$email%' ";}
																	}
																	}
																	$result = mysqli_query($db_handle, $sql);
																	//regarder s'il y a de résultat
																	if (mysqli_num_rows($result) == 0) {
																	echo " vendeur non repertorié !";
																	} 

																	else {
																	while ($data = mysqli_fetch_assoc($result)) {



																			$id=$data['id'];
																			echo "<br>";

																		}

																		$sql = "DELETE FROM vendeur";
																	$sql .= " WHERE id = $id";
																	$result = mysqli_query($db_handle, $sql);
																	echo "Bien supprimé ! <br>";


																}


										} 

										else {
										echo "Database not found";
										}


							}			

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


