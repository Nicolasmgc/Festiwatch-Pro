<?php session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <h1>Ajout personnel pour votre festival</h1>
</head>
<body>


    <div>
        <form method ="post">
            <p>Ajout personnel</p>
            <input type="texte" name="Personnel_nom" id="Personnel_nom" placeholder="Nom du personnel" required><br><br>
            <input type="texte" name="Personnel_prenom" id="Personnel_prenom" placeholder="Prenom du personnel" required><br><br>
            <input type="texte" name="Personnel_fonction" id="Personnel_fonction" placeholder="Fonction du personnel" required><br><br>
            <input type="submit" name="sendperso" id="sendperso" value="Ajouter un membre du personnel">


    </form>




    </div>


</body>
</html>
    <?php include '../../../Controller/database.php';
    global $db;
    ?>
    <?php include '../../../Modele/ajoutpersonnel/ajoutpersonnel.php'; ?>