<?php



$tel = isset ($_POST["tel"])? $_POST["tel"] : "";
$adresse = isset ($_POST["adresse"])? $_POST["adresse"] : "";
$mail = isset ($_POST["mail"])? $_POST["mail"] : "";


$database = "siteweb";

$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database); ?>




<!DOCTYPE html>
<html>
<head>
	<title>Coordonnées du magasin </title>
</head>
<body>

		<?php if ($db_found) 

					{

						
					 $sql = " SELECT * FROM coordmag ";
					 

					 $result = mysqli_query($db_handle, $sql);


					 while ($data = mysqli_fetch_assoc($result)) 

					 { ?>

					 	
					 	<p> <?= $data['mail']; ?></p>
					 	<p> <?= $data['tel']; ?></p>
					 	<p> <?= $data['adresse']; ?></p>

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

</body>
</html>


