<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="negociation_client.css" />
        <title>ECE Market Place - Négociation</title>
    </head>


    

    <body>
        <div id="wrapper">
            <header>
                <div id="logo">

                    <img src="img/logo_ece_min.png" alt="logo du site"/><br>
                    <a href="connexion.html">SE CONNECTER</a>

                </div>
                <div id="titre_principal">
                <h1>ECE Market Place</h1>
                </div>
                

                    <ul id="nav">
                        <li><a href="page_princ.php">Accueil</a></li>
                        <li><a href="tout_parcourir.php">Tout Parcourir</a></li>
                        <li><a href="notifications.php">Notifications</a></li>
                        <li><a href="panier.php">Panier</a></li>
                        <li><a href="votre_compte.php">Votre Compte</a></li>
                    </ul>
            </header>

            <section>

                <h2>Vous semblez intéressé par ce produit : </h2>
                <img src="" alt="image du produit concerné"/>
                <p> o Vous négociez directement avec le vendeur. Vous fixez le prix et attendez.<br>
                    o Le vendeur accepte votre offre ou propose une contre-offre. Si le vendeur accepte votre offre, le processus se termine.<br>
                    o Le processus se répète 5 fois jusqu'à ce qu'il soit conclu de façon satisfaisante ou qu'il se décompose.<br>
                    o Notez bien que si vous faites une offre sur un article, vous êtes sous contrat légal pour l'acheter si le vendeur accepte l'offre.<br>
                </p>
                <form action="1traitement.php" method="post">
                    <table>
                        <tr>
                            <td>Votre offre (en euro):</td>
                            <td><input type="number" name="prix"></td>
                        </tr>
                        <tr>
                        <td colspan="2" align="center">
                        <input type="submit" name="button1" value="Soumettre">
                        </td>
                        </tr>
                    </table>
                    </form>

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