<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="achat.css" />
        <title>ECE Market Place - Achat</title>
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
                
                    </ul>
            </header>

            <section>

                <h2>Pour acheter ce produit, veuillez rentrer vos coordonnées bancaires : </h2>
                <img src="img/tireuse.jpg" alt="image du produit concerné"/>
                <br><br><br>
                <form action="" method="post">
                    <div>
                        <input type="radio" id="Visa" name="type" >
                        <label for="Visa">Visa</label>
                      </div>
                      <div>
                        <input type="radio" id="MasterCard" name="type" >
                        <label for="MasterCard">MasterCard</label>
                      </div>
                      <div>
                        <input type="radio" id="AmericanExpress" name="type" >
                        <label for="AmericanExpress">AmericanExpress</label>
                      </div>
                      <div>
                        <input type="radio" id="PayPal" name="type" >
                        <label for="PayPal">PayPal</label>
                      </div><br>

                    <input type="text" name="numero" placeholder="Numéro de la carte" required="required"/>
                    <input type="text" name="nom" placeholder="Nom affiché sur la carte" required="required"/>
                    <input type="date" name="date_exp" placeholder="Date d'expiration de la carte" required="required"/>
                    <input type="text" name="code" placeholder="Code de sécurité" required="required"/><br><br>
                    <button type="submit">Payer</button><br><br>
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