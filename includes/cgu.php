<?php 
session_start()
?>

<!DOCTYPE HTML>
<head>
    <title>FestiWatch - CGU</title>
    <meta charset="utf-8">
    <link rel="icon" href="icon.jpeg">
    <link rel="stylesheet" type="text/css" href="general.css">
    <link rel="stylesheet" type="text/css" href="cgu.css">
</head>
<body>
<nav>
            <ul>
               <li><img src="Logo alternatif2.png" class="logo" >  </a></li>   
                  
                <li><a href="#" > Accueil </a></li>
                <li><a href="./FAQ/faq.php"> FAQ </a></li>
                <li><a href="./AProposDeNous/A_propos_de_nous.php"> A propos de nous </a></li>
                
                <li class="deroulant"><?php if(isset($_SESSION['email'])){
                            ?>
                        
                      <a><?php echo $_SESSION['email'];?></a>
                        <ul class="sous">
                            <li><a href="../monprofil.php"> Voir mon profil </a></li>
                            <li><a href="../deconnexion.php"> Se déconnecter </a></li>
                        </ul>           
                        


                        <?php
                        }
                        
                        elseif(isset($_SESSION['Fest_id'])){
                            ?>


                        <a><?php echo $_SESSION['Fest_nom'];?></a>
                        <ul class="sous">
                            <li><a href="../ConnexionGestionnaire/mesinfos.php?Fest_id=".$_SESSION['Fest_id']> Voir mes infos </a></li> <?php // Truc très ghetto ça marche moyennement ce href faire gaffe pendant la démo ?>
                            <li><a href="../deconnexion.php"> Se déconnecter </a></li>
                        </ul>  


                            <?php
                        }
                        
                        else{ ?>
                        <li><a href="../login1.php">Se connecter </a></li>
                        
                        <?php } ?></a>
                          
                    
                    
                    
                </li>
                
                
                
                
            </ul>
        </nav>

    <div class="FAQTitle"><h1>CGU</h1></div>

    <div class="FAQCards">
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Article 1 : Les mentions légales</div></div>
            <div class="FAQAnswer"><div>L'édition du site FestiWatch est assurée par la Société Prodetch dont le siège social est situé au 10 Rue de Vanves, 92130 Issy-les-Moulineaux.<br>
                Numéro de téléphone : 01 49 54 52 00<br>
                Adresse mail : prodetech@gmail.com<br>
                L'hébergeur du site FestiWatch est la société Prodetech, dont le siège social est situé au 10 Rue de Vanves, 92130 Issy-les-Moulineaux, avec le numéro de téléphone : 01 49 54 52 00</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Article 2 : Accès au site</div></div>
            <div class="FAQAnswer"><div>Le site FestiWatch permet à l'Utilisateur un accès gratuit aux services suivants : Le site internet propose les services suivants :
                Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à Internet. Tous les frais supportés par l'Utilisateur pour accéder au service (matériel informatique, logiciels, connexion Internet, etc.) sont à sa charge.<br>
                L’Utilisateur non-membre n'a pas accès aux services réservés. Pour cela, il doit s’inscrire en remplissant le formulaire. En acceptant de s’inscrire aux services réservés, l’Utilisateur membre s’engage à fournir des informations sincères et exactes concernant son état civil et ses coordonnées, notamment son adresse email.<br>
                Pour accéder aux services, l’Utilisateur doit ensuite s'identifier à l'aide de son identifiant et de son mot de passe qui lui seront communiqués après son inscription.<br>
                Tout Utilisateur membre régulièrement inscrit pourra également solliciter sa désinscription en se rendant à la page dédiée sur son espace personnel. Celle-ci sera effective dans un délai raisonnable. Tout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du site ou serveur et sous réserve de toute interruption ou modification en cas de maintenance, n'engage pas votre responsabilité. Dans ces cas, l’Utilisateur accepte ainsi ne pas tenir rigueur à l’éditeur de toute interruption ou suspension de service, même sans préavis.<br>
                L'Utilisateur a la possibilité de contacter le site par messagerie électronique à l’adresse email de l’éditeur communiqué à l’ARTICLE 1.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Article 3 : Collecte des données</div></div>
            <div class="FAQAnswer"><div>Le site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés.<br>
                En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l'Utilisateur dispose d'un droit d'accès, de rectification, de suppression et d'opposition de ses données personnelles. L'Utilisateur exerce ce droit.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Article 4 : Propriété intellectuelle</div></div>
            <div class="FAQAnswer"><div>Les marques, logos, signes ainsi que tous les contenus du site (textes, images, son…) font l'objet d'une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d'auteur.<br>
                La marque FestiWatch est une marque déposée par Prodetech.Toute représentation et/ou reproduction et/ou exploitation partielle ou totale de cette marque, de quelque nature que ce soit, est totalement prohibée.<br>
                L'Utilisateur doit solliciter l'autorisation préalable du site pour toute reproduction, publication, copie des différents contenus. Il s'engage à une utilisation des contenus du site dans un cadre strictement privé, toute utilisation à des fins commerciales et publicitaires est strictement interdite.<br>
                Toute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l’autorisation expresse de l’exploitant du site Internet constituerait une contrefaçon sanctionnée par l’article L 335-2 et suivants du Code de la propriété intellectuelle.<br>
                Il est rappelé conformément à l’article L122-5 du Code de propriété intellectuelle que l’Utilisateur qui reproduit, copie ou publie le contenu protégé doit citer l’auteur et sa source.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Article 5 : Responsabilité</div></div>
            <div class="FAQAnswer"><div>Les sources des informations diffusées sur le site FestiWatch sont réputées fiables mais le site ne garantit pas qu’il soit exempt de défauts, d’erreurs ou d’omissions.<br>
                Les informations communiquées sont présentées à titre indicatif et général sans valeur contractuelle. Malgré des mises à jour régulières, le site FestiWatch ne peut être tenu responsable de la modification des dispositions administratives et juridiques survenant après la publication. De même, le site ne peut être tenue responsable de l’utilisation et de l’interprétation de l’information contenue dans ce site.<br>
                L'Utilisateur s'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, est interdite. Il assume les risques liés à l'utilisation de son identifiant et mot de passe. Le site décline toute responsabilité.<br>
                Le site FestiWatch ne peut être tenu pour responsable d’éventuels virus qui pourraient infecter l’ordinateur ou tout matériel informatique de l’Internaute, à la suite d’une utilisation, à l’accès, ou au téléchargement provenant de ce site.<br>
                La responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d'un tiers.</div></div>
        </div>
        <div class="FAQCard">
            <div class="FAQQuestion"><div>Article 6 : Liens hypertextes</div></div>
            <div class="FAQAnswer"><div>Des liens hypertextes peuvent être présents sur le site. L’Utilisateur est informé qu’en cliquant sur ces liens, il sortira du site FestiWatch. Ce dernier n’a pas de contrôle sur les pages web sur lesquelles aboutissent ces liens et ne saurait, en aucun cas, être responsable de leur contenu.</div></div>
        </div>
    </div>

</body>
