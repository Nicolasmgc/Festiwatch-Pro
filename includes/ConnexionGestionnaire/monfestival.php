<?php
session_start();
if(isset($_SESSION['Fest_nom']) && (isset($_SESSION['Fest_email'])))
{
    ?>
         <!DOCTYPE html>
     <html>
        <head>
           <h1>Bienvenue sur votre festival</h1>
         </head>
     <body> 
     <div> 
    <p>Votre nom de festival: </p>
     <p><?php echo $_SESSION['Fest_nom']; ?> </p>
     <p>Votre date de début :</p>
    <p> <?php echo $_SESSION['Fest_datedebut']; ?></p>
     <p>Votre date de fin :</p> 
    <p><?php echo $_SESSION['Fest_datefin']; ?> </p>
    <p>Le prix de votre festival : </p>
    <p><?php echo $_SESSION['Fest_prix']; ?> </p>
    <p>Votre programmation : </p>
     <p><?php echo $_SESSION['Fest_programmation']; ?> </p>
    <p>Votre adresse : </p>
     <p><?php echo $_SESSION['Fest_adresse']; ?> </p>
     <p>Votre code postal : </p>
     <p><?php echo $_SESSION['Fest_codepostal']; ?> </p>
     <p>Votre pays : </p>
     <p><?php echo $_SESSION['Fest_pays']; ?> </p>
     <p>Votre accès : </p>
     <p><?php echo $_SESSION['Fest_access']; ?> </p>
     <p>Votre lien : </p>
     <p><?php echo $_SESSION['Fest_lien']; ?> </p>
     <p>Votre email : </p>
     <p><?php echo $_SESSION['Fest_email']; ?> </p>
     <p>Votre numéro de téléphone : </p>
     <p><?php echo $_SESSION['Fest_numtelephone']; ?> </p>   
    </div>
<?php } ?>