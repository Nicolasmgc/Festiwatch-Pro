<?php 
    session_start();

    include '../../Controller/database.php';
    global $db;

    
    $m2 = $db->prepare("DELETE FROM user WHERE id = :id");
    $m2->execute(['id'=>$_GET['id']]);
    header('Location: adminuser.php');
    exit;
?>