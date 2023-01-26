<?php session_start();
?>

<!DOCTYPE html>
<html>

<?php if(isset($_SESSION['Fest_id'])){
   ?> 


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ajoutperso.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
    <h1>Ajout de personnel pour votre festival</h1>
    <button class="button" ><a href="../mesinfosgestio/mesinfos.php"> Mes informations</a></button>
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
</head>
<body>
<h2>        <?php
        if(isset($_GET['succes'])){
            echo $_GET['succes'];
        }
        ?> </h2>
    <div id="maindiv">
        <form method="post" id="formdiv">

            <input type="texte" name="Personnel_nom" id="Personnel_nom" placeholder="Nom du personnel" required ><br><br>
            <input type="texte" name="Personnel_prenom" id="Personnel_prenom" placeholder="Prenom du personnel" required><br><br>
            <input type="texte" name="Personnel_fonction" id="Personnel_fonction" placeholder="Fonction du personnel" required><br><br>
            <input type="submit" name="sendperso" id="sendperso" value="Ajouter un membre du personnel">
            <div id="msg" style="position: absolute; font-size: 16px; color: #730800; width: 50%; margin: 50px auto"></div>
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
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta" height="60"></a>
            <img src="../../../PNG/youtube.png" alt="icone de insta" height="70">
            <img src="../../../PNG/twitter.png" alt="icone de insta" height="75">
            </div>
            <div class="lien">
            <a href="../CGU/cgu.php">Conditions général d'utilisation</a>
            <a href="../FAQ/faq.php"> FAQ</a>
            <a href="../Connexionuser/login1.php">Connexion</a>
            <a href="../../../Modele/listealerte/filtrealerte.php">Alerte</a>
            
            </div> </div>
             </footer>
</html>
    <?php include '../../../Controller/database.php';
    global $db;
    ?>
    <?php include '../../../Modele/ajoutpersonnel/ajoutpersonnel.php'; ?>

<!-- <script>
    var formulaire = document.getElementById("formdiv");
    var msg = document.getElementById("msg");

    formulaire.addEventListener("submit", function(event) {
        event.preventDefault();
        if (formulaire.checkValidity()) {
        msg.innerHTML = "Personnel ajouté";
        }
    }); 
</script> -->

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