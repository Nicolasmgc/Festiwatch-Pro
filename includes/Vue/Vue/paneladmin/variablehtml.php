<?php session_start();

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="stylesignin.css">

<style>
    .goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
        display: none !important;
    }
    body {
        top: 0px !important;
    }
    .goog-tooltip {
        display: none !important;
    }
    .goog-tooltip:hover {
        display: none !important;
    }
    .goog-text-highlight {
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }
</style>
<body>





<?php include '../../../Controller/database.php';
global $db;
?>

<nav>
    <ul>
        <div style="right: 0px; width: 100%">
        <li style="left: -150px"><img src="../../../PNG/Logo alternatif.png" class="logo"></li> 
        <li style="margin-left: 250px"><a href="../Pagedaccueil/index.php" > Accueil </a></li>
        <li><a href="../FAQ/faq.php"> FAQ </a></li>
        <li><a href="../Apropos/A_propos_de_nous.php"> A propos de nous </a></li>
        </div>
        
        
        <li class="deroulant"><?php if(isset($_SESSION['email'])){
                    ?>
                
                <a><?php echo $_SESSION['email'];?></a>
            <ul class="sous">
                <li><a href="../monprofiluser/monprofil.php"> Voir mon profil </a></li>
                <li><a href="#"> Liste des festivales </a></li>
                <li><a href="../../../Controller/deconnexion.php"> Se déconnecter </a></li>
                <?php if($_SESSION['role_id'] == '2'){
                ?>
                
                    <li><a href="#"> Pannel Admin </a></li>
                    <?php } ?>
                
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

<?php
if(isset($_SESSION['role_id'])){
    if($_SESSION['role_id'] == 2){
?>
<div class="container">
    <form method="post">
        <p>Sign in</p>
        <div class="line1"><input type="varchar" name="Fest_nom" id="Fest_nom" placeholder="Votre Nom" required><br/><br>
            <input type="date" name="Fest_datedebut" id="Fest_datedebut" placeholder="Début de votre festival" required><br/><br></div><br>
        <div class="line2"><input type="date" name="Fest_datefin" id="Fest_datefin" placeholder="Fin de votre festival" required><br/><br>
            <input type="float" name="Fest_prix" id="Fest_prix" placeholder="Prix d'une place" required><br/><br></div><br>
        <div class="line3"><input type="texte" name="Fest_programmation" id="Fest_programmation" placeholder="Votre programmation" required><br/><br>
            <input type="varchar" name="Fest_adresse" id="Fest_adresse" placeholder="Votre adresse" required><br/><br></div><br>
        <div class="line4"><input type="int" name="Fest_codepostal" id="Fest_codepostal" placeholder="Votre Code Postal" required><br/><br>
            <input type="varchar" name="Fest_pays" id="Fest_pays" placeholder="Votre pays" required><br/><br></div><br>
        <div class="line5"><input type="text" name="Fest_access" id="Fest_access" placeholder="Accès à votre festival" required><br/><br>
            <input type="text" name="Fest_lien" id="Fest_lien" placeholder="Lien vers votre festival" required><br/><br></div><br>
        <div class="line6"><input type="email" name="Fest_email" id="Fest_email" placeholder="Email du festival" required><br/><br>
            <input type="int" name="Fest_numtelephone" id="Fest_numtelephone" placeholder="Numéro de téléphone du festival" required><br/><br></div><br>
        <div class="line7"><input type="password" name="fest_password" id="fest_password" placeholder="Votre mot de passe" required><br/><br>
            <input type="password" name="fest_passwordc" id="fest_passwordc" placeholder="Vérifiez votre mdp" required><br/><br></div><br>

        
        <input type="submit" name="formsendgestio" id="formsendgestio" value="Ok">
    </form>
</div>

    <?php include '../../../Modele/signingestio/signingestio.php'; ?>

</body>
<footer>
           <div class="contact">
           <br>
            Nous contacter <br>
            Mail :<br> prodetech@gmail.com <br>
            Numéro :<br> 068975412 <br>
            Adresse :<br>10 Rue de Vanves, 92130 Issy-les-Moulineaux
            </div>
         
            <div class="foot">
            <div class="reseaux">
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta" class="insta" ></a>
            <img src="../../../PNG/youtube.png" alt="icone de insta" class="youtube" >
            <img src="../../../PNG/twitter.png" alt="icone de insta" class="twit">
            </div>
            <div class="lien">
            <a href="../CGU/cgu.php">Conditions générales d'utilisation</a>
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
            <link rel="stylesheet" href="page_erreur.css">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
        <head>
            <title>Erreur</title>
        </head>
        <body>
        <div class="fond">
            <div class="round">
                Erreur vous n'êtes pas administrateur !</br>
                Veuillez retouner à la page d'accueil !</br>
                <button ><a href="./deconnexion.php"  style="text-decoration:none">Page accueil</a></button>
                </div>
        </div>
        
        
        <img src="image.png" alt="image d'erreur">
        
        </body>
        
        </html>
    

    <?php
    }}else{
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
                Erreur vous n'êtes pas administrateur !</br>
                Veuillez retouner à la page d'accueil !</br>
                <button ><a href="./deconnexion.php"  style="text-decoration:none">Page accueil</a></button>
                </div>
        </div>
        
        
        <img src="../../../PNG/errorimage.png" alt="image d'erreur">

        </body>
        </html>
    <?php
    }
    ?>

    