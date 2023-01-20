<?php 
    session_start();

    include '../../../Controller/database.php';
    global $db;

    $m = $db->prepare("DELETE FROM festival WHERE Fest_id = ?");
    $m->execute([$_GET['Fest_id']]);
    header('Location: ../../../Vue/Vue/paneladmin/gestiongestio.php');
    exit;
?>