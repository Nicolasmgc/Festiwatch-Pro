<?php
session_start();
?>


<?php include '../../Controller/database.php';
global $db;
?>

<?php

    $r = $db->prepare("SELECT alerte.alerte_id, montre.Montre_code, alerte.alerte_zone, alerte.alerte_date, alerte.alerte_horaire,   personnel.Personnel_nom, alerte.alerte_statut, alerte.alerte_type
    FROM (((alerte
    INNER JOIN montre ON alerte.Montre_code = montre.Montre_code)
    INNER JOIN festival ON alerte.Fest_id = festival.Fest_id)
    INNER JOIN personnel ON alerte.Personnel_id = personnel.Personnel_id)
    WHERE alerte.Fest_id = :Fest_id ");
    $r->execute([
        'Fest_id' => $_SESSION[('Fest_id')]
        
    ]);
    // $resultr ->

    $a = array();

    while ($result = $r->fetch()) {
        if($result['alerte_statut']=='En cours'){
           array_unshift($a,$result);
        }else{
    array_push($a,$result);
        }
    }
    echo json_encode($a);

?>