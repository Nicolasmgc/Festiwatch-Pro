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
        <nav>
            <ul>
                <li><img src="../../../PNG/Logo alternatif.png" class="logo"></li> 
                <li><a href="../Pagedaccueil/index.php" > Accueil </a></li>
                <li><a href="../FAQ/faq.php"> FAQ </a></li>
                <li><a href="../Apropos/A_propos_de_nous.php"> A propos de nous </a></li>
                
                
                
                <li class="deroulant"><?php if(isset($_SESSION['email'])){
                            ?>
                        
                      <a><?php echo $_SESSION['email'];?></a>
                    <ul class="sous">
                        <li><a href="../monprofiluser/monprofil.php"> Voir mon profil </a></li>
                        <li><a href="../../../Controller/deconnexion.php"> Se déconnecter </a></li>
                        
                        </ul>
                                               
                        <?php
                }
                        elseif(isset($_SESSION['Fest_id'])){
                            ?>


                        <a><?php echo $_SESSION['Fest_nom'];?></a>
                        <ul class="sous">
                            <li><a href="../mesinfosgestio/mesinfos.php"> Voir mes infos </a></li> <?php // Truc très ghetto ça marche moyennement ce href faire gaffe pendant la démo ?>
                            <li><a href="../../../Controller/deconnexion.php"> Se déconnecter </a></li>
                        </ul>  


                            <?php
                        }
                        else{ ?>
                        <li><a href="../Connexionuser/login1.php">Se connecter </a></li>
                        
                        <?php } ?>
                    
                    
                    
                </li>
                
                
                
                
            </ul>
        </nav>
            <h1>Bienvenue sur votre profil gestionnaire</h1>
            <button class="sidebarAlert" type="button"><a href="../listealertes/alertes.php">ALERTES</a></button>
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

                <p><?php 
                if(isset($_SESSION['Fest_id']))
                {
                    echo "La programmation de " . $_SESSION['Fest_nom'] ." : " . $_SESSION['Fest_programmation'];
                }
                else
                {
                    echo "Veuillez vous connecter à un festival.";
                }
                ?></p>

                <p><?php 
                if(isset($_SESSION['Fest_id']))
                {
                    echo "Le lien de " . $_SESSION['Fest_nom'] ." : " . $_SESSION['Fest_lien'];
                }
                else
                {

                }
                ?></p>
            </div>


            <div class="modif">
                <div class="subfields">
                    <form method="post">
                        <button>Modifier le nom de votre festival</button>
                        <input type="text" name="modifnom" id="modifnom" placeholder="Modifier le nom de votre festival" required><br/>
                        <input type="submit" name="formmodifnom" id="formmodifnom" value="Ok">
                    </form>

                    <form method="post">
                        <button>Modifier le prix d'une place</button>
                        <input type="number" name="modifprix" id="modifprix" placeholder="Prix d'une place (en €)" required><br/>
                        <input type="submit" name="formmodifprix" id="formmodifprix" value="Ok">
                    </form>
                </div>

                <div class="subfields">

                    <form method="post">
                        <button>Modifier la date de début</button>
                        <input type="date" name="modifdatedebut" id="modifdatedebut" placeholder="Chercher un utilisateur par id" required><br/>
                        <input type="submit" name="formmodifdatedebut" id="formmodifdatedebut" value="Ok">
                    </form>
                    <form method="post">
                        <button>Modifier la date de fin</button>
                        <input type="date" name="modifdatefin" id="modifdatefin" placeholder="Chercher un utilisateur par id" required><br/>
                        <input type="submit" name="formmodifdatefin" id="formmodifdatefin" value="Ok">
                    </form>
                </div>

                <div class="subfields">
                    <form method="post">
                        <button>Modifier l'accès au festival</button>    
                        <input type="text" name="modifaccess" id="modifaccess" placeholder="Modifier l'accès au festival" required><br/>
                        <input type="submit" name="formmodifaccess" id="formmodifaccess" value="Ok">
                    </form>

                    <form method="post">
                        <button>Modifier le numéro de téléphone du festival</button>
                        <input type="int" name="modifnumtelephone" id="modifnumtelephone" placeholder="Modifier le numéro de téléphone" required><br/>
                        <input type="submit" name="formmodifnumtelephone" id="formmodifnumtelephone" value="Ok">
                    </form>
                </div>

                <div class="subfields">
                    <form method="post">
                        <button>Modifier l'adresse e-mail du festival</button>
                        <input type="email" name="modifemail" id="modifemail" placeholder="Mofier l'email du festival" required><br/>
                        <input type="submit" name="formmodifemail" id="formmodifemail" value="Ok">
                    </form>

                    <form method="post">
                        <button>Modifier l'adresse du festival</button>
                        <input type="text" name="modifadresse" id="modifadresse" placeholder="Modifier l'adresse du festival" required><br/>
                        <input type="submit" name="formmodifadresse" id="formmodifadresse" value="Ok">
                    </form>
                </div>

                <div class="subfields">
                    <form method="post">
                        <button>Modifier le code postal</button>
                        <input type="text" name="modifcodepostal" id="modifcodepostal" placeholder="Modifier le code postal du festival" required><br/>
                        <input type="submit" name="formmodifcodepostal" id="formmodifcodepostal" value="Ok">
                    </form>

                    <form method="post">
                        <button>Modifier le pays du festival</button>
                        <input type="text" name="modifpays" id="modifpays" placeholder="Modifier le pays du festival" required><br/>
                        <input type="submit" name="formmodifpays" id="formmodifpays" value="Ok">
                    </form>
                </div>
                <div class="subfields">
                    <form method="post">
                        <button>Modifier la programmation du festival</button>
                        <input type="text" name="modifprogrammation" id="modifprogrammation" placeholder="Modifier la programmation du festival" required><br/>
                        <input type="submit" name="formmodifprogrammation" id="formmodifprogrammation" value="Ok">
                    </form>

                    <form method="post">
                        <button>Modifier le lien du festival</button>
                        <input type="text" name="modiflien" id="modiflien" placeholder="Modifier le lien du festival" required><br/>
                        <input type="submit" name="formmodiflien" id="formmodiflien" value="Ok">
                    </form>
                </div>
            </div>


<?php include '../../../Controller/database.php';
global $db;
?>

<?php
  if(isset($_POST['formmodifnom'])){

    extract($_POST);

    if(!empty($modifnom)){
        $z = $db->prepare("UPDATE festival SET Fest_nom = :Fest_nom WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_nom' => $modifnom,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}

if(isset($_POST['formmodifprix'])){

    extract($_POST);

    if(!empty($modifprix)){
        $z = $db->prepare("UPDATE festival SET Fest_prix = :Fest_prix WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_prix' => $modifprix,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}

if(isset($_POST['formmodifdatedebut'])){

    extract($_POST);

    if(!empty($modifdatedebut)){
        $z = $db->prepare("UPDATE festival SET Fest_datedebut = :Fest_datedebut WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_datedebut' => $modifdatedebut,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}

if(isset($_POST['formmodifdatefin'])){

    extract($_POST);

    if(!empty($modifdatefin)){
        $z = $db->prepare("UPDATE festival SET Fest_datefin = :Fest_datefin WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_datefin' => $modifdatefin,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}

if(isset($_POST['formmodifaccess'])){

    extract($_POST);

    if(!empty($modifaccess)){
        $z = $db->prepare("UPDATE festival SET Fest_access = :Fest_access WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_access' => $modifaccess,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}

if(isset($_POST['formmodifnumtelephone'])){

    extract($_POST);

    if(!empty($modifnumtelephone)){
        $z = $db->prepare("UPDATE festival SET Fest_numtelephone = :Fest_numtelephone WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_numtelephone' => $modifnumtelephone,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}

if(isset($_POST['formmodifemail'])){

    extract($_POST);

    if(!empty($modifemail)){
        $z = $db->prepare("UPDATE festival SET Fest_email = :Fest_email WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_email' => $modifemail,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}

if(isset($_POST['formmodifadresse'])){

    extract($_POST);

    if(!empty($modifadresse)){
        $z = $db->prepare("UPDATE festival SET Fest_adresse = :Fest_adresse WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_adresse' => $modifadresse,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}

if(isset($_POST['formmodifcodepostal'])){

    extract($_POST);

    if(!empty($modifcodepostal)){
        $z = $db->prepare("UPDATE festival SET Fest_codepostal = :Fest_codepostal WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_codepostal' => $modifcodepostal,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}

if(isset($_POST['formmodifpays'])){

    extract($_POST);

    if(!empty($modifpays)){
        $z = $db->prepare("UPDATE festival SET Fest_pays = :Fest_pays WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_pays' => $modifpays,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}

if(isset($_POST['formmodifprogrammation'])){

    extract($_POST);

    if(!empty($modifprogrammation)){
        $z = $db->prepare("UPDATE festival SET Fest_programmation = :Fest_programmation WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_programmation' => $modifprogrammation,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}

if(isset($_POST['formmodiflien'])){

    extract($_POST);

    if(!empty($modiflien)){
        $z = $db->prepare("UPDATE festival SET Fest_lien = :Fest_lien WHERE Fest_id = :Fest_id");
        $z ->execute([
            'Fest_lien' => $modiflien,

            'Fest_id' =>$_SESSION['Fest_id']
        ]);
        echo "Changement faits";
    }
}
?>

            <div class="btn">
                <button><a href="../../../Controller/deconnexion.php"  style="text-decoration:none">Déconnexion</a></button>

                <button><a href="../Pagedaccueil/index.php"  style="text-decoration:none">Page d'accueil</a></button>

                <button><a href="../listefestivals/festivals.php"  style="text-decoration:none">Liste des festivals</a></button>
            </div>
    </body>
    <footer>
           <div class="contact">
           <br>
            Nous contacter <br>
            Mail:<br> prodetec@gmail.com <br>
            Numéro:<br> 068975412 <br>
            Adresse: <br>10 Rue de Vanves, 92130 Issy-les-Moulineaux
            </div>
         
            <div class="foot">
            <div class="reseaux">
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta" height="60"></a>
            <img src="../../../PNG/youtube.png" alt="icone de insta" height="70">
            <img src="../../../PNG/twitter.png" alt="icone de insta" height="75">
            </div>
            <div class="lien">
            <a href="../CGU/cgu.php">Conditions général d'utilisation</a>
            <a href="../FAQ/faq.php"> FAQ</a>
            <a href="../Connexionuser/login1.php">Connexion</a>
            </div> </div>
             </footer>
    </html>

<?php

    }else{
        ?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../../Controller/errors/erreur.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
<head>
    <title>Erreur</title>
</head>
<body>
<div class="fond">
    <div class="round">
        Erreur cette page est reservée aux festivals !</br>
        Veuillez retouner à la page d'accueil !</br>
        <button ><a href=" ../Pagedaccueil/index.php"  style="text-decoration:none">Page d'accueil</a></button>
        </div>
</div>


<img src="../../../PNG/errorimage.png" alt="image d'erreur">

</body>

</html>

        <?php
    }

?>



