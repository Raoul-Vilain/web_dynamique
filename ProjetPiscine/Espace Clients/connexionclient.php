

<?php 


$login = isset ($_POST["login"])? $_POST["login"] : "";

$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";

$database = "siteweb";

$db_handle = mysqli_connect('localhost', 'root', 'root');
$db_found = mysqli_select_db($db_handle, $database);


if (isset($_POST['bouton1'])) 

{
	if ($db_found) 

	{
			$sql = "SELECT login FROM client";
			if ($login != "") {
			$sql .= " WHERE login LIKE '%$login%'";
			if ($mdp != "") {
			$sql .= " AND mdp LIKE '%$mdp%'";
			}
	}
$result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
if (mysqli_num_rows($result) == 0) { ?> 


<p>Vous n'êtes pas inscrit dans la base de données ! ";</p>


<?php


} else {
while ($data = mysqli_fetch_assoc($result)) {


			header('Location: page_princ.html');


}
}
} else {
echo "Database not found";
}
}

?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="connexionclient.css" />
        <title>EceMarketPlace - connexion client</title>
    </head>

<body>
<div class="wrapper">

    <section class="login-container">
        <div>

            <header>
               
                <div id="logo">

                        <img src="img/logo_ece_min.png" alt="logo du site"/>

                </div>
              
                <h1>Identification</h1>
           

            </header>



             
            <form action="" method="post">
                <input type="text" name="login" placeholder="login" required="required"/>
                <input type="password" name="mdp" placeholder="Mot de passe" required="required"/>
                <button type="submit" name ="bouton1" value ="rechercher">Connexion</button>
                
              </form>


            <form action="inscription.php" method="post">
              <div>
                <button type="inscription">Inscrivez-vous!</button>
              </div>
            </form>
        </div>
    </section>

</div>

</body>

</html>


