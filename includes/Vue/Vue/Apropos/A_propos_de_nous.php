<?php session_start();

?>
<!DOCTYPE html>
<html>
   <head>
        <meta charset="utf-8">
        <title>A propos de nous </title>
        <link rel="stylesheet" href="AProposDeNous2.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
    </head>
    
    <body>
    <nav>
            <ul>
                <li><img src="Logo alternatif.png" class="logo" >  </a></li> 
                  
                <li><a href="../index.php" > Accueil </a></li>
                <li><a href=".././FAQ/faq.php"> FAQ </a></li>
                <li><a href="#"> A propos de nous </a></li>
                
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
                        
                        <?php } ?></a>
                          
                    
                    
                    
                </li>
                
                
                
                
            </ul>
        </nav>
             <div class="haut">
            <h2>Notre mission</h2><span class="vertical"></span>            
            <br>Nous sommes une entreprise composée de sept jeunes ingénieurs, prêts á relever les défis de demain.
              Notre entreprise cherche à faciliter et à améliorer votre quotidien en vous informant sur la qualité de votre environnement,
               en l’occurrence un environnement festif. Afin de prévenir d’éventuels accidents  et de pouvoir profiter de votre événement en toute tranquillité, nous avons développer une montre connectée “FestiWatch”.
            </div>
        
             <div class="yellow-bloc">
            <h4>Qui sommes-nous ?</h4> 
            </div>
        
 
        <div class="photo1">
        <div class="nicolas">
        <img src="PDG.jpg" alt="Photo du PDG de l'entreprise"   class="image" />
        <p>Directeur général</br> Nicolas Merbouche </p> 
        </div>

        <div class="anais">
        <img src="Anais.jpg" alt="Photo d'anais" class="image" />
        <p> Responsable Marketing </br> Anaïs Messalti</p>
        </div>

        <div class="bastien" >
         <img src="Bastien.jpg" alt="Photo de bastien"  class="image" />
        <p>Consultant informatique </br> Bastien Maupas</p>
        </div>
                    
        </div>

        <div class="photo1">
        <div class="tom">
        <img src="TOM.jpg" alt="Photo de tom"   class="image" />
        <p>Développeur</br> Tom Hall</p>
        </div>

        <div class="constance">
        <img src="Cons.jpg" alt="Photo constance" class="image" />
        <p> Chargée de conception </br>  Constance Persad</p>
        </div>

        <div class="arno" >
         <img src="Arno.jpg" alt="Photo d'Arno"  class="image" />
         <p>UX / UI Designer</br> Arno Laperotine</p></div>
        </div>
        
         <div class="ziad">
        <img src="Ziad.jpg" alt="Photo de Ziad" class="image"/>
        <p>Développeur<br>Ziad El Younsi</p>
       </div>
                
       <h1> Festiwatch en quelques mots</h1>
       <div class="photo2">
       <img src="health22.png" alt="icone de santé"  height="310"  class="image1" /><br>
       <img src="icones-de-localisation.png" alt="icone de localisation"  height="325"class="image1" /><br>
       <img img src="party2.png" alt="icone de fete"  height="325"class="image1" /><br>
       </div>
       <div class="paragraphe">
       <p>FestiWatch vous permet de mesurer votre fréquence cardiaque, ainsi que votre température et l’intensité sonore
        autour de vous. Vos données de santé sont stockées et peuvent être consultées sur le site en temps réel, mais aussi 
        après le festival. Nous considérons que votre santé et votre sécurité sont primordiales pour passer un bon moment entres amis. 
        Ces données nous permettront de réagir rapidement en cas de problème. </p> 
        <p>La FestiWatch vous permet également de vous localiser et de localiser vos amis sur une carte, afin de vous retrouver
        facilement au courant de la soirée. Un bouton d’urgence a été ajouté aux montres pour vous permettre d’envoyer votre localisation, 
        afin qu’une équipe de sécurité vienne vous porter secours au plus vite si un problème survient. </p> 
        <p>Des capteurs vous permettent de mesurer la qualité de l’air autour de vous, si des données anormales sont récoltées,
         une alerte nous sera envoyer,pour que votre expérience se passe au mieux.
        FestiWatch vous permet de vous localiser et de localiser vos amis sur une carte afin de vous retrouver plus facilement. </p> 
       </div>
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
            <img src="twitter.png" alt="icone de insta" height="75">
            </div>
            <div class="lien">
            <a href="../../cgu.php">Conditions général d'utilisation</a>
            <a href=".././FAQ/faq.php"> FAQ</a>
            <a href="../login1.php">Connexion</a>
            </div> </div>
             </footer>
    </body>

    
</html>