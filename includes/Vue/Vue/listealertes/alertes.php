<?php
session_start();
?>

<?php
  $host = 'localhost';
  $dbname = 'siteweb';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT alerte.alerte_id, alerte.alerte_zone, alerte.alerte_horaire, alerte.alerte_date, alerte.alerte_statut, alerte.alerte_type, festival.Fest_nom, montre.Montre_code, personnel.Personnel_nom
  FROM (((alerte
  INNER JOIN montre ON alerte.Montre_code = montre.Montre_code)
  INNER JOIN festival ON alerte.Fest_id = festival.Fest_id)
  INNER JOIN personnel ON alerte.Personnel_id = personnel.Personnel_id)
  WHERE alerte.Fest_id = ".$_SESSION['Fest_id'];
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<?php include '../../../Controller/database.php';
    global $db;
    ?>


<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> Alertes </title>
    <link rel="stylesheet" href="alertes.css">

</head>

<body>
<nav>
            <ul>
                <li><img src="../../../PNG/Logo alternatif.png" class="logo"></li> 
                <li><a href="../Pagedaccueil/index.php" > Accueil </a></li>
                <li><a href="../FAQ/faq.php"> FAQ </a></li>
                <li><a href="../Apropos/A_propos_de_nous.php"> A propos de nous </a></li>
                
                
                
                <li class="deroulant"><?php if(isset($_SESSION['email'])){
                            ?>
                        
                      <a><?php echo $_SESSION['email'];?></a>
                    <ul class="sous">
                        <li><a href="../monprofiluser/monprofil.php"> Voir mon profil </a></li>
                        <li><a href="../../../Controller/deconnexion.php"> Se déconnecter </a></li>
                        
                        </ul>
                                               
                        <?php
                }
                        elseif(isset($_SESSION['Fest_id'])){
                            ?>


                        <a><?php echo $_SESSION['Fest_nom'];?></a>
                        <ul class="sous">
                            <li><a href="../mesinfosgestio/mesinfos.php"> Voir mes infos </a></li> <?php // Truc très ghetto ça marche moyennement ce href faire gaffe pendant la démo ?>
                            <li><a href="../../../Controller/deconnexion.php"> Se déconnecter </a></li>
                        </ul>  


                            <?php
                        }
                        else{ ?>
                        <li><a href="../Connexionuser/login1.php">Se connecter </a></li>
                        
                        <?php } ?>
                    
                    
                    
                </li>
                
                
                
                
            </ul>
        </nav>

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
                <th> Action</th>
            </tr>
        </thead>

        <tbody>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr> 
          <td><?php echo htmlspecialchars($row['alerte_id']); ?></td>
          <td><?php echo htmlspecialchars($row['Montre_code']); ?></td>
          <td><?php echo htmlspecialchars($row['alerte_zone']); ?></td>
          <td><?php echo htmlspecialchars($row['alerte_date']); ?></td>
          <td><?php echo htmlspecialchars($row['alerte_horaire']); ?></td>
          <td><?php echo htmlspecialchars($row['Personnel_nom']); ?></td>
          <td><?php echo htmlspecialchars($row['alerte_statut']); ?></td>
          <td><?php echo htmlspecialchars($row['alerte_type']); ?></td>
          <td>
            <button class="actionBtns" style="background-color: #55F">
                Modifier
            </button>
            <button class="actionBtns" style="background-color: #F58">
                Terminé
            </button>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>

        <!-- <tbody> 
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
        </tbody> -->
    </table>
</br>
    <footer>
           <div class="contact">
           <br>
            Nous contacter <br>
            Mail:<br> prodetec@gmail.com <br>
            Numéro:<br> 068975412 <br>
            Adresse: <br>10 Rue de Vanves, 92130 Issy-les-Moulineaux
            </div>
         
            <div class="foot">
            <div class="reseaux">
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta" height="60"></a>
            <img src="../../../PNG/youtube.png" alt="icone de insta" height="70">
            <img src="../../../PNG/twitter.png" alt="icone de insta" height="75">
            </div>
            <div class="lien">
            <a href="../CGU/cgu.php">Conditions général d'utilisation</a>
            <a href="../FAQ/faq.php"> FAQ</a>
            <a href="../Connexionuser/login1.php">Connexion</a>
            </div> </div>
             </footer>
    </body>
    