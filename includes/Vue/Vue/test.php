<?php



include '../../Controller/database.php';
global $db;

// Initialiser une session cURL
$curl = curl_init();

// URL de la requête GET
$url = 'http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=G02D';

// Configurer les options de cURL
curl_setopt($curl, CURLOPT_URL, $url); // Spécifier l'URL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Récupérer le contenu de la réponse dans une variable

// Exécuter la requête et récupérer la réponse
$response = curl_exec($curl);

// Vérifier les erreurs de cURL


// Fermer la session cURL
curl_close($curl);


$data_tab = str_split($response,33);
echo "Tabular Data:<br />";
for($i=0, $size=count($data_tab); $i<$size; $i++){
echo "Trame $i: $data_tab[$i]<br />";
}

for ($i = 0; $i < 14; $i++){
$trame = $data_tab[$i];
// décodage avec des substring
$t = substr($trame,0,1);
$o = substr($trame,1,4);
// …
// décodage avec sscanf
list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");

$date = $year ."-" .$month ."-" .$day ." / " .$hour .":" .$min;

$time = $hour .":" .$min;

$add = $db->prepare("INSERT INTO capteurgaz(gaz_detec, month, Montre_code, year, day, hour, minute, date, time) VALUES(:gaz_detec, :month, :Montre_code, :year, :day, :hour, :minute, :date, :time)");
$add->execute([
    'gaz_detec' => $v,
    'Montre_code' => 3,
    'month' => $month,
    'year' => $year,
    'day' => $day,
    'hour' => $hour,
    'minute' => $min,
    'date' => $date,
    'time' => $time

]);

}

?>