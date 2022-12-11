<?php
    session_start();
    if(isset($_SESSION['Fest_email']) && (isset($_SESSION['Fest_nom'])))
    {
?>
    <!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="mesinfos.css">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
        </head>

        <body>
            <h1>Bienvenue sur votre profil gestionnaire</h1>
            <div class="infocard">
            
            <p>Votre adresse email personnelle : </p>
            <p><?php echo $_SESSION['Fest_email']; ?> </p>

            <br>
            <br>

            <p><?php 
            if(isset($_SESSION['Fest_id']))
            {
                echo "Le nom de votre festival : ". $_SESSION['Fest_nom'];
            }
            ?></p>

            <p><?php 
            if(isset($_SESSION['Fest_id']))
            {
                echo "La date de début de " . $_SESSION['Fest_nom'] . " : " . $_SESSION['Fest_datedebut'];
            }
            ?></p>

            <p><?php 
            if(isset($_SESSION['Fest_id']))
            {
                echo "La date de fin de " . $_SESSION['Fest_nom'] . " : " . $_SESSION['Fest_datefin'];
            }
            ?></p>

            <p><?php 
            if(isset($_SESSION['Fest_id']))
            {
                echo "Le prix d'une place : " . $_SESSION['Fest_prix'];
            }
            ?></p>

            <p><?php 
            if(isset($_SESSION['Fest_id']))
            {
                echo "Les accès pour " . $_SESSION['Fest_nom'] . " : " . $_SESSION['Fest_access'];
            }
            ?></p>
            
            <p><?php 
            if(isset($_SESSION['Fest_id']))
            {
                echo "Le numéro de téléphone de" . $_SESSION['Fest_nom'] . " : " . $_SESSION['Fest_numtelephone'];
            }
            ?></p>

            <p><?php 
            if(isset($_SESSION['Fest_id']))
            {
                echo "L'e-mail de " . $_SESSION['Fest_nom'] . " : " . $_SESSION['Fest_email'];
            }
            ?></p>

            <p><?php 
            if(isset($_SESSION['Fest_id']))
            {
                echo "L'adresse de " . $_SESSION['Fest_nom'] . " : " . $_SESSION['Fest_adresse'];
            }
            ?></p>

            <p><?php 
            if(isset($_SESSION['Fest_id']))
            {
                echo "Le code postal de " . $_SESSION['Fest_nom'] . " : " . $_SESSION['Fest_codepostal'];
            }
            ?></p>

            <p><?php 
            if(isset($_SESSION['Fest_id']))
            {
                echo "Le pays de " . $_SESSION['Fest_nom'] ." : " . $_SESSION['Fest_pays'];
            }
            else
            {
                echo "Veuillez vous connecter à un festival.";
            }
            ?></p>
            </div>


            <div class="modif">
                <form method="post">
                    <button>
                        <span>Modifier le nom de votre festival</span>
                        <input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">
                    </button>
                    <input type="text" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
                </form>

                <form method="post">
                    <button>
                        <span>Modifier la date de début</span>
                        <input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">
                    </button>
                    <input type="date" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
                </form>

                <form method="post">
                    <button>
                        <span>Modifier la date de fin</span>
                        <input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">
                    </button>
                    <input type="date" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
                </form>

                <form method="post">
                    <button>
                        <span>Modifier le prix d'une place</span>
                        <input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">
                    </button>
                    <input type="number" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
                </form>

                <form method="post">
                    <button>
                        <span>Modifier l'accès au festival</span>
                        <input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">
                    </button>
                    <input type="text" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
                </form>

                <form method="post">
                    <button>
                        <span>Modifier le numéro de téléphone du festival</span>
                        <input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">
                    </button>
                    <input type="tel" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
                </form>

                <form method="post">
                    <button>
                        <span>Modifier l'adresse e-mail du festival</span>
                        <input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">
                    </button>
                    <input type="email" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
                </form>

                <form method="post">
                    <button>
                        <span>Modifier l'adress du festival</span>
                        <input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">
                    </button>
                    <input type="text" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
                </form>

                <form method="post">
                    <button>
                        <span>Modifier le code postal</span>
                        <input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">
                    </button>
                    <input type="text" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
                </form>

                <form method="post">
                    <button>
                        <span>Modifier le pays du festival</span>
                        <input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">
                    </button>
                    <input type="text" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
                </form>
            </div>




            <div class="btn">
                <button><a href="deconnexion.php"  style="text-decoration:none">Déconnexion</a></button>

                <button><a href="deleteuser.php"  style="text-decoration:none">Supprimer votre compte</a></button>

                <button><a href="Page d'accueil/index.php"  style="text-decoration:none">Page d'accueil</a></button>

                <button><a href="festivals.php"  style="text-decoration:none">Liste des festivals</a></button>
            </div>
    </body>
    </html>

<?php

    }else{
        echo "Veuillez vous connecter à votre compte";
    }

?>



