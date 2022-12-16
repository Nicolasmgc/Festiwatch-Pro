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
                <li><img src="Logo alternatif.png" class="logo"></li> 
                <li><a href="../index.php" > Accueil </a></li>
                <li><a href="#"> FAQ </a></li>
                <li><a href="../AProposDeNous/A_propos_de_nous.php"> A propos de nous </a></li>
                
                
                
                <li class="deroulant"><?php if(isset($_SESSION['email'])){
                            ?>
                        
                      <a><?php echo $_SESSION['email'];?></a>
                    <ul class="sous">
                        <li><a href="../../monprofil.php"> Voir mon profil </a></li>
                        <li><a href="../../deconnexion.php"> Se déconnecter </a></li>
                        
                        </ul>
                                               
                        <?php
                }
                        elseif(isset($_SESSION['Fest_id'])){
                            ?>


                        <a><?php echo $_SESSION['Fest_nom'];?></a>
                        <ul class="sous">
                            <li><a href="../../ConnexionGestionnaire/mesinfos.php"> Voir mes infos </a></li> <?php // Truc très ghetto ça marche moyennement ce href faire gaffe pendant la démo ?>
                            <li><a href="../deconnexion.php"> Se déconnecter </a></li>
                        </ul>  


                            <?php
                        }
                        else{ ?>
                        <li><a href="../../login1.php">Se connecter </a></li>
                        
                        <?php } ?>
                    
                    
                    
                </li>
                
                
                
                
            </ul>
        </nav>


    <div class="container">
        <form method="post">
            <p>Sign in</p>
            <input type="texte" name="nom" id="nom" placeholder="Votre Nom" required><br/>
            <input type="texte" name="prenom" id="prenom" placeholder="Votre Prenom" required><br/>
            <input type="email" name="semail" id="semail" placeholder="Votre Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required><br/> 
            <input type="int" name="numtelephone" id="numtelephone" placeholder="Votre numéro de téléphone" pattern="[0-9]{10}" required><br/>
            <input type="texte" name="adresse" id="adresse" placeholder="Votre Adresse" required><br/>
            <input type="texte" name="pays" id="pays" placeholder="Votre Pays" required><br/>
            <input type="date" name="datedenaissance" id="datedenaissance" placeholder="Votre Date de Naissance" required><br/>
            <input type="int" name="codepostal" id="codepostal" placeholder="Votre Code Postal" required><br/>
            <input type="texte" name="ville" id="ville" placeholder="Votre Ville" required><br/>
            <input type="password" name="password" id="password" placeholder="Votre Mot de passe" required><br/>
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirmez votre mot de passe" required><br/>
            
            <label> Accès handicapé :</label>
                <select type="boolean" name="handicap" id="handicap">
                    <option value=0>Non</option>
                    <option value=1>Oui</option><br/>
            <input type="submit" name="formsend" id="formsend" value="Ok">
        </form>
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
            <a href="https://www.instagram.com/pro_detech"> <img src="insta.png" alt="icone de insta" height="60"></a>
            <img src="youtube.png" alt="icone de insta" height="70">
            <img src="twitter.png" alt="icone de insta" height="75" class="twitter">
            </div>
            <div class="lien">
            <a href="../../cgu.php">Conditions général d'utilisation</a>
            <a href=".././FAQ/faq.php"> FAQ</a>
            </div> </div>
             </footer>
</html>

    <?php include 'C:\wamp64\www\includes\database.php';
    global $db;
    ?>
    <?php include 'C:\wamp64\www\includes\login.php'; ?>
    <?php include 'C:\wamp64\www\includes\signin.php'; ?>