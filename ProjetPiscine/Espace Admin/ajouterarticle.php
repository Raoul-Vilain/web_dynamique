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
        <td>mdp:</td>
        <td><input type="text" name="mdp"></td>
        </tr>
        <tr>
        <td>prenom:</td>
        <td><input type="text" name="prenom"></td>
        </tr>
        <tr>
        <td>nom:</td>
        <td><input type="text" name="nom"></td>
        </tr>
        <tr>
        <td>fond:</td>
        <td><input type="text" name="fond"></td>
        </tr>
        <tr>
        <td>photo:</td>
        <td><input type="text" name="photo"></td>
        </tr>

        <tr>
        <td colspan="2" align="center">
         <input type="submit" name="button2" value="ajouter"></td>
        </tr>
        </table>
        </form>

            <?php



                    $email = isset($_POST["email"])? $_POST["email"] : "";
                    $pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
                    $nom = isset($_POST["nom"])? $_POST["nom"] : "";
                    $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
                    $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
                    $fond= isset($_POST["fond"])? $_POST["fond"] : "";
                    $photo = isset($_POST["photo"])? $_POST["photo"] : "";




                    $database = "siteweb";


                    $db_handle = mysqli_connect('localhost', 'root', 'root');
                    $db_found = mysqli_select_db($db_handle, $database);
                                            

                                            if (isset($_POST["button2"])) 


                                    {

                                                                if ($db_found) 

                                                                {

                                                                    $sql = "INSERT INTO vendeur(nom, prenom, email, pseudo, mdp, fond, photo)
                                                                     VALUES('$nom', '$prenom', '$email', '$pseudo', '$mdp', '$fond', '$photo')";
                                                                    $result = mysqli_query($db_handle, $sql);
                                                                    echo "Bien ajouté ! <br>";


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