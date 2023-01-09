<?php
session_start();
?>


<?php include '../../Controller/database.php';
global $db;
?>

<?php

    $r = $db->prepare("SELECT alerte.alerte_id, alerte.alerte_zone, alerte.alerte_horaire, alerte.alerte_date, alerte.alerte_statut, alerte.alerte_type, festival.Fest_nom, montre.Montre_code, personnel.Personnel_nom
    FROM (((alerte
    INNER JOIN montre ON alerte.Montre_code = montre.Montre_code)
    INNER JOIN festival ON alerte.Fest_id = festival.Fest_id)
    INNER JOIN personnel ON alerte.Personnel_id = personnel.Personnel_id)
    WHERE alerte.Fest_id = :Fest_id AND alerte.alerte_statut = 'Termine'");
    $r->execute([
        'Fest_id' => $_SESSION[('Fest_id')]
    ]);
    while ($result = $r->fetch()) {

    $a[]= $result;

    }
    echo json_encode($a);

?>