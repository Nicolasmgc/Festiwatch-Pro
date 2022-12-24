<?php 
    session_start();

    include 'database.php';
    global $db;

    $z = $db->prepare("INSERT INTO userhistory (userhistory_adresse, userhistory_codepostal, userhistory_datedecreation, userhistory_datedenaissance, userhistory_email, userhistory_handicap, userhistory_id, userhistory_nom, userhistory_numtelephone, userhistory_pays, userhistory_prenom, userhistory_ville) VALUES (:adresse, :codepostal, :datedecreation, :datedenaissance, :email, :handicap, :id, :nom, :numtelephone, :pays, :prenom, :ville")
    $z->execute([
        'adresse' = $_SESSION['adresse'],
        'codepostal' = $_SESSION['codepostal'],
        'datedecreation' = $_SESSION['datedecreation'],
        'datedenaissance' = $_SESSION['datedenaissance'],
        'email' = $_SESSION['email'],
        'handicap' = $_SESSION['handicap'],
        'id' = $_SESSION['id'],
        'nom' = $_SESSION['nom'],
        'numtelephone' = $_SESSION['numtelephone'],
        'pays' = $_SESSION['pays'],
        'prenom' = $_SESSION['prenom'],
        'ville' = $_SESSION['ville']
    ]);


    $m = $db->prepare("DELETE FROM user WHERE id = :id");
    $m->execute(['id'=>$_SESSION['id']]);
    header('Location: ../Vue/Pagedaccueil/index.php');
    exit;
?>