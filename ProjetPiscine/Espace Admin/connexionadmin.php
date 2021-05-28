<?php 
 

session_start();



$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";

$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";

$database = "siteweb";

$db_handle = mysqli_connect('localhost', 'root', 'root');
$db_found = mysqli_select_db($db_handle, $database);


if (isset($_POST['bouton1'])) 

{
    if ($db_found) 

    {
            $sql = "SELECT pseudo FROM admin";
            if ($pseudo != "") {
            $sql .= " WHERE pseudo LIKE '%$pseudo%'";
            if ($mdp != "") {
            $sql .= " AND mdp LIKE '%$mdp%'";
            }
    }
$result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
if (mysqli_num_rows($result) == 0) {


        echo "Vous n'êtes pas inscrit dans la base de données ! ";


                    } else 

    {


if (mysqli_fetch_assoc($result)!=null) 


    {
            header('Location : page_princ.php');
            
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
        <link rel="stylesheet" href="connexionadmin.css" />
        <title>EceMarketPlace - connexion admin</title>
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
                <input type="text" name="pseudo" placeholder="login" required="required"/>
                <input type="password" name="mdp" placeholder="Mot de passe" required="required"/>
                <button type="submit" name ="bouton1" value ="rechercher">Connexion</button>
              </form>
        </div>
    </section>

</div>

</body>

</html>
