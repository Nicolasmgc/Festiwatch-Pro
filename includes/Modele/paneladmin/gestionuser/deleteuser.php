<?php 
    session_start();

    include '../../../Controller/database.php';
    global $db;

    $z = $db->prepare("INSERT INTO userhistory (userhistory_adresse, userhistory_codepostal, userhistory_datedecreation, userhistory_datedenaissance, userhistory_email, userhistory_handicap, userhistory_id, userhistory_nom, userhistory_numtelephone, userhistory_pays, userhistory_prenom, userhistory_ville) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?)");
    $z->execute([
        $_GET['adresse'],$_GET['codepostal'],$_GET['datedecreation'],$_GET['datedenaissance'],$_GET['email'], $_GET['handicap'],$_GET['id'],$_GET['nom'],$_GET['numtelephone'],$_GET['pays'],$_GET['prenom'], $_GET['ville']  
    ]);


    $m = $db->prepare("DELETE FROM user WHERE id = ?");
    $m->execute([$_GET['id']]);
    header('Location: ../../../Vue/Vue/paneladmin/gestionuser.php');
    exit;
?>