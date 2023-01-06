<?php session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="signin.css">
    <title>Formulaire pour utilisateurs</title>
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


    <div class="container">
        <form method="post">
            <p>Sign in</p>
            <input type="texte" name="nom" id="nom" placeholder="Votre Nom" required><br><br>
            <input type="texte" name="prenom" id="prenom" placeholder="Votre Prenom" required><br><br>
            <input type="email" name="semail" id="semail" placeholder="Votre Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required><br><br>
            <input type="int" name="numtelephone" id="numtelephone" placeholder="Votre numéro de téléphone" pattern="[0-9]{10}" required><br><br>
            <input type="texte" name="adresse" id="adresse" placeholder="Votre Adresse" required><br><br>
            <input type="texte" name="pays" id="pays" placeholder="Votre Pays" required><br><br>
            <input type="date" name="datedenaissance" id="datedenaissance" placeholder="Votre Date de Naissance" max="2004-12-31" min="1963-01-01" required><br><br>
            <input type="int" name="codepostal" id="codepostal" placeholder="Votre Code Postal" required><br><br>
            <input type="texte" name="ville" id="ville" placeholder="Votre Ville" required><br><br>
            <input type="password" name="password" id="password" placeholder="Votre Mot de passe" required><br><br>
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirmez votre mot de passe" required><br/>
            
            <label>Handicap :</label>
                <input type="radio" name="handicap" id="handicap" for="handicap" value=1> Oui</input>
                <input type="radio" name="handicap" id="handicap" for="handicap" value=0 checked> Non</input><br>
                    
            <input type="submit" name="formsend" id="formsend" value="S'inscrire">
            <input type="reset" value="Effacer">
        </form>
    </div>
    <script src="myscripts.js"></script>
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
            <img src="../../../PNG/twitter.png" alt="icone de insta" height="75" class="twitter">
            </div>
            <div class="lien">
            <a href="../CGU/cgu.php">Conditions général d'utilisation</a>
            <a href="../FAQ/faq.php"> FAQ</a>
            </div> </div>
             </footer>
</html>

    <?php include '../../../Controller/database.php';
    global $db;
    ?>
    <?php include '../../../Modele/loginuser/login.php'; ?>
    <?php include '../../../Modele/signinuser/signin.php'; ?>