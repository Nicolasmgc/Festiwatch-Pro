<?php session_start();


?>
<!DOCTYPE HTML>
<html>
<head>
    <title>FestiWatch - FAQ</title>
    <meta charset="utf-8">
    <link rel="icon" href="../../../PNG/icon.jpeg">
    
    <link rel="stylesheet" type="text/css" href="faq2.css">
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
  
    <div class="FAQTitle"><h1>FAQ</h1></div>

    <div class="FAQCards">
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Comment je sais quel identifiant est associé à ma FestiWatch ?</div></div>
            <div class="FAQAnswer"><div>L'identifiant sera déjà disponible sur la montre qui vous sera donnée à votre entrée au festival.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Comment puis-je alerter les secours en cas de malaise ?</div></div>
            <div class="FAQAnswer"><div>Il vous suffit d'appuyer sur les boutons sur les côtés de la montre pendant plus de 5 secondes.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Et pour alerter les secours si un ami fait un malaise ?</div></div>
            <div class="FAQAnswer"><div>Vous pouvez les appeler depuis votre montre à condition de rester avec la personne, ou bien le faire depuis la montre de la personne en détresse.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Où dois-je aller si ma montre n'a plus de batterie ?</div></div>
            <div class="FAQAnswer"><div>Vous pouvez la donner à un responsable à l'accueil du festival, le responsable se chargera de vous en donner une nouvelle.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Pourrai-je toujours accéder à mes données récoltées après le festival ?</div></div>
            <div class="FAQAnswer"><div>Bien sûr, vos données seront actives pendant encore 6 mois après la fin du festival, sauf si vous souhaitez les supprimer avant.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Si nos données vitales sont surveillées pour notre sécurité, puis-je retirer ma FestiWatch durant le festival ?</div></div>
            <div class="FAQAnswer"><div>Il n'est pas particulièrement recommandé aux festivaliers de retirer la FestiWatch durant un événement agité, mais si vous préférez la retirer, il est préférable de l'éteindre pour éviter toute confusion.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Puis-je sortir du festival avec ma montre ?</div></div>
            <div class="FAQAnswer"><div>Si votre festival est en possession des FestiWatches, cela dépendra de ses organisateurs. Sinon, vous devrez remettre votre FestiWatch à un(e) responsable en sortant des lieux.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Que se passe-t-il si j'abime ou casse ma FestiWatch ?</div></div>
            <div class="FAQAnswer"><div>Chez PRODETECH, on vous aviserait plutôt de faire attention à la FestiWatch qui vous a été attribuée. Cependant, aucune charge supplémentaire ne vous sera demandée si elle n'est pas possession du festival.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Comment puis-je associer ma montre à la FestiWatch de mes amis ?</div></div>
            <div class="FAQAnswer"><div>En vous rendant sur le site internet de la FestiWatch, vous pouvez envoyer des invitations de connexions à d'autres festivaliers en entrant leur identifiant FestiWatch.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Les ondes qui permettent aux FestiWatches d'envoyer nos données au site sont-elles dangereuses ?</div></div>
            <div class="FAQAnswer"><div>Ne vous inquiétez pas, les ondes ne sont pas plus nocives que celles émises par votre téléphone puisqu'elles émettent des ondes Bluetooth.</div></div>
        </div>
    </div>
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
            <a href="https://www.instagram.com/pro_detech"> 
              <img src="../../../PNG/insta.png" alt="icone de insta" class="insta"></a>
            <img src="../../../PNG/youtube.png" alt="icone de insta" height="60">
            <img src="../../../PNG/twitter.png" alt="icone de insta" height="65">
            </div>
            <div class="lien">
            <a href="../CGU/cgu.php">Conditions générales d'utilisation</a>
            <a href="../FAQ/faq.php"> FAQ</a>
            <a href="../Connexionuser/login1.php">Connexion</a>
            </div></div>
             </footer>
</html>