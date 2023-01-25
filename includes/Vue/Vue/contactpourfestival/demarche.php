<?php session_start();

?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="icon" href="../../../PNG/Logo alternatif.png">
    <link rel="stylesheet" href="demarche.css">
<head>
    <title>Démarche pour un nouveau festival</title>

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
                        <li><a href="#"> Liste des festivales </a></li>
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

    <div class = "deb">
        <h1> Comment intégrer votre festival dans notre site ? </h1>
        <br><br>
        <div class ="expli"> 
            <p>
            Vous organisez un festival et souhaitez intégrer nos montres Festiwatch dans votre festival ? <br>
            ProDeTech désire s'adapter et conseiller chacun de ses partenaires de manière juste et responsable <br>
            Nous proposons donc à chaque partenaire de remplir le questionnaire ci-dessous qui nous permettra de vous contacter directement<br>
            Nous pourrons échanger sur le mode de fonctionnement de nos montres et répondre à vos questions concernant les tarifs ou autre <br>
            Il vous suffit simplement de completer ce formulaire 
            <br>
            <br>
            <br>
            <br>
            

            </p>

<?php include '../../../Controller/database.php';
global $db;
?>
        <form class="enre" method="post">
            <h3>Formulaire</h3>
            <li><label class="la"> Nom </label>
            <input type="text" name="Cl_nom" id="Cl_nom" placeholder="Votre nom *" required> </li>
            <li><label class="la"> Prénom </label>
            <input type="text" name="Cl_prenom" id="Cl_prenom" placeholder="Votre prénom *" required></li>
            <li><label class="la"> Email </label>
            <input type="text" name="Cl_email" id="Cl_email" placeholder="Votre email *" required></li>
            <li><label class="la"> Numéro de téléphone professionel </label>
            <input type="int" name="Cl_num" id="Cl_num" placeholder="Numéro de téléphone *" required></li>
            <li><label class="la"> Votre adresse </label>
            <input type="text" name="Cl_adresse" id="Cl_adresse" placeholder="Votre adresse"></li>
            <li><label class="la" name="la"> Remarques/Questions </label>
            <input class="req" name="req" id="req" rows="10" cols="50" placeholder="Type here..."></li>
            <li style="margin-top: 50px;"><input type="submit" name="formlogingestio" id="formlogingestio" value="Send"></li>     
        </form>
        <?php include '../../../Modele/signingestio/traitementdemarche.php'; ?>       
            

        </div>

    </div>

</html>