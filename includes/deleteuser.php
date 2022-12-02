<?php 
    session_start();

    include 'C:\wamp64\www\includes\database.php';
    global $db;

    $m = $db->prepare("DELETE FROM user WHERE id = :id");
    $m->execute(['id'=>$_SESSION['id']]);
    header('Location: index.php');
    exit;
?>