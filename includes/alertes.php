<?php
session_start();
?>


<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> Alertes </title>
    <link rel="stylesheet" href="alertes.css">

</head>

<body>
    <h1> Les alertes </h1>
    <p> Vous êtes sur la page du festival "Les ardentes" </p>
<div class= page> <!-- C'est pour naviguer entre les pages de différents festivals -->
    <a> Les Ardentes </a>
</div>

<table class="tableau-style">
        <thead> 
            <tr>
                <th> ID alerte </th>
                <th> N° de montre </th>
                <th> Position </th>
                <th> Date </th>
                <th> Heure </th>
                <th> Personnel en charge </th>
                <th> Statut </th>
                <th> Type d'alerte</th>
            </tr>
        </thead>
        <tbody> 
            <tr>
                <td> 1 </td>
                <td> 25 </td>
                <td> zone B </td>
                <td> 14-12-2022 </td>
                <td> 20:09 </td>
                <td> Henry Mont </td> 
                <td> En attente </td>
                <td> Malaise </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td> 47 </td>
                <td> zone A </td>
                <td> 14-12-2022 </td>
                <td> 20:45 </td>
                <td> Thomas Auster </td> 
                <td> En cours </td>
                <td> Agression </td>
            </tr>
            <tr>
                <td> 3 </td>
                <td> 89 </td>
                <td> zone C </td>
                <td> 17-12-2022 </td>
                <td> 18:49 </td>
                <td> Justine Briant </td> 
                <td> Terminé </td>
                <td> Chute </td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> 172 </td>
                <td> zone B </td>
                <td> 22-12-2022 </td>
                <td> 14:49 </td>
                <td> Arthur Lagrange </td> 
                <td> Terminé </td>
                <td> Bagarre </td>
            </tr>
        </tbody>
    </table>
    </body>