<?php 
    session_start();

    include 'database.php';
    global $db;

    $z = $db->prepare("INSERT INTO userhistory (userhistory_adresse, userhistory_codepostal, userhistory_datedecreation, userhistory_datedenaissance, userhistory_email, userhistory_handicap, userhistory_id, userhistory_nom, userhistory_numtelephone, userhistory_pays, userhistory_prenom, userhistory_ville) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?)");
    $z->execute([
        $_SESSION['adresse'],$_SESSION['codepostal'],$_SESSION['datedecreation'],$_SESSION['datedenaissance'],$_SESSION['email'], $_SESSION['handicap'],$_SESSION['id'],$_SESSION['nom'],$_SESSION['numtelephone'],$_SESSION['pays'],$_SESSION['prenom'], $_SESSION['ville']  
    ]); // je sais pas pourquoi la requête marche pas "PDOException"


    $m = $db->prepare("DELETE FROM user WHERE id = ?");
    $m->execute([$_SESSION['id']]);
    header('Location: ../Vue/Vue/Pagedaccueil/index.php');
    exit;
?>