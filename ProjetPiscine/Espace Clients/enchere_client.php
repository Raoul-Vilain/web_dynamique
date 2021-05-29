<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="enchere_client.css" />
        <title>ECE Market Place - Enchère</title>
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
                        <li><a href="page_princ.html">Accueil</a></li>
                        <li><a href="tout_parcourir.html">Tout Parcourir</a></li>
                        <li><a href="notifications.html">Notifications</a></li>
                        <li><a href="panier.html">Panier</a></li>
                        <li><a href="votre_compte.html">Votre Compte</a></li>
                    </ul>
            </header>

            <section>

                <h2>Vous semblez intéressé par ce produit : </h2>
                <img src="" alt="image du produit concerné"/>
                <p> Proposez donc un prix et nous vous ferons savoir si votre offre a été retenue :
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