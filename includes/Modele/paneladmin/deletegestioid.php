<?php 
    session_start();

    include 'database.php';
    global $db;

    
    $m2 = $db->prepare("DELETE FROM festival WHERE Fest_id = :Fest_id");
    $m2->execute(['Fest_id'=>$_GET['Fest_id']]);
    header('Location: admingestio.php');
    exit;
?>