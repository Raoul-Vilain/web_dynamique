<?php

$login=isset($_POST["login"])? $_POST["login"] : "";
$mdp=isset($_POST["mdp"])? $_POST["mdp"] : "" ;
$nom=isset($_POST["nom"])? $_POST["nom"] : "" ;
$prenom=isset($_POST["prenom"])? $_POST["prenom"] : "";
$adresse1=isset($_POST["adresse1"])? $_POST["adresse1"] : "";
$adresse2=isset($_POST["adresse2"])? $_POST["adresse2"] : "";
$codepostal=isset($_POST["codepostal"])? $_POST["codepostal"] : "";
$pays=isset($_POST["pays"])? $_POST["pays"] : "";
$numeroo=isset($_POST["numeroo"])? $_POST["numeroo"] : "";
$ville=isset($_POST["ville"])? $_POST["ville"] : "";
$numerocar=isset($_POST["numerocar"])? $_POST["numerocar"] : "";
$cvv=isset($_POST["cvv"])? $_POST["cvv"] : "";
$dateexpiration=isset($_POST["dateexpiration"])? $_POST["dateexpiration"] : "";
$type=isset($_POST["type"])? $_POST["type"] : "";

$database="siteweb";

$db_handle = mysqli_connect('localhost', 'root', 'root');
$db_found = mysqli_select_db($db_handle, $database);


if (isset($_POST['button1'])) {

		if ($db_found) 

		{


					$sql = "INSERT INTO client(nom, prenom, login, mdp) VALUES('$nom', '$prenom', '$login', '$mdp')";
					$result = mysqli_query($db_handle, $sql);
					


					$sql="SELECT id FROM client WHERE nom='$nom' AND prenom='$prenom' AND login= '$login' ";
					$result = mysqli_query($db_handle, $sql);

					while($data = mysqli_fetch_assoc($result))

					{
						$id=$data['id'];

					}


					$sql="INSERT INTO coordlivraison(nom, prenom, adresse1, adresse2, codepostal, pays, numero, ville, client_id) 

					VALUES('$nom', '$prenom', '$adresse1', '$adresse2', '$codepostal', '$pays', '$numeroo', '$ville', '$id')";

						$result=mysqli_query($db_handle, $sql);	

					$sql="INSERT INTO coordonnéesbancaires(numerocar, cvv, dateexpiration, type, nom, prenom, client_id)

					VALUES ('$numerocar', '$cvv', '$dateexpiration', '$type', '$nom', '$prenom', '$id')";

						$result=mysqli_query($db_handle, $sql);	


					$sql="INSERT INTO panier(client_id) VALUES ('$id')";	
					$result=mysqli_query($db_handle, $sql);	

					$sql="INSERT INTO notification(id_client) VALUES ('$id')";	
					$result=mysqli_query($db_handle, $sql);	

					$sql=" SELECT client.nom, client.prenom, client.login, coordlivraison.adresse1, coordlivraison.ville, coordonnéesbancaires.cvv, coordonnéesbancaires.numerocar, coordonnéesbancaires.type FROM client 
	INNER JOIN coordlivraison ON coordlivraison.client_id= client.id INNER JOIN coordonnéesbancaires ON coordonnéesbancaires.client_id=client.id WHERE client.id='$id'; ";
					$result=mysqli_query($db_handle, $sql);	


					while ($data = mysqli_fetch_assoc($result)) {


						echo"bien ajouté!";
						echo "nom: " . $data['nom'] . "<br>";
						echo "prenom: " . $data['prenom'] . "<br>";
						echo "login:" . $data['login'] . "<br>";
						echo "adresse1: " . $data['adresse1'] . "<br>";
						echo "ville: " . $data['ville'] . "<br>";
						echo "cvv: " . $data['cvv'] . "<br>";
						echo "numero: " . $data['numerocar'] . "<br>";
						echo "type: " . $data['type'] . "<br>";
					}

		}

	}		

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
</head>
<body>

	<form method="POST" action="" align="center">
		
		<input type="text" name="login"> Login : <br/>

		<input type="password" name="mdp"> Mot de passe : <br/>

		<input type="text" name="nom"> Nom : <br/>

		<input type="text" name="prenom"> Prenom : <br/>

		<input type="text" name="adresse1"> Adresse 1 : <br/>

		<input type="text" name="adresse2"> Adresse 2 : <br/>
		
		<input type="text" name="codepostal"> Code Postal : <br/>
		
		<input type="text" name="pays"> Pays: <br/>
		
		<input type="text" name="numeroo"> Numéro : <br/>
		
		<input type="text" name="ville"> Ville : <br/>

		<input type="text" name="numerocar"> Numéro de carte bancaire : <br/>

		<input type="text" name="cvv"> CVV : <br/>

		<input type="text" name="type"> Type : <br/>

		<input type="text" name="dateexpiration"> Date d'expiration : <br/>

		<input type="submit" name="button1" value="envoi"> <br/>



	</form>

</body>
</html>