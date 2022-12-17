<?php 
    session_start();

    include 'database.php';
    global $db;

    $m = $db->prepare("DELETE FROM user WHERE id = :id");
    $m->execute(['id'=>$_SESSION['id']]);
    header('Location: ../Vue/Pagedaccueil/index.php');
    exit;
?>