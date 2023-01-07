<?php
session_start();
?>

<?php
  $host = 'localhost';
  $dbname = 'siteweb';
  $username = 'root';
  $password = '';

  global $dsn;
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
    $db = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $username, $password);
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
        <?php
        global $row; 
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : 
        ?>
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
            <script>
                async function modifyRecord(event) {
                    event.preventDefault();

                    const id = event.target.getAttribute('data-id');
                    const response = await fetch(`/FestiWatch-pro/includes/Vue/Vue/listealertes/alertes.php`, {
                        method: 'MODIFY'
                    });

                    console.log(id);

                    if (response.ok) {
                    console.log('Record deleted successfully');
                    } else {
                    console.error('Error deleting record');
                    }
                    setTimeout(() => location.reload(), 1000);
                }

                async function deleteRecord(event) {
                    event.preventDefault();

                    const id = event.target.getAttribute('data-id');
                    const response = await fetch(`/FestiWatch-pro/includes/Vue/Vue/listealertes/alertes.php`, {
                        method: 'DELETE'
                    });
                    
                    console.log(id);

                    if (response.ok) {
                    console.log('Record deleted successfully');
                    } else {
                    console.error('Error deleting record');
                    }
                    setTimeout(() => location.reload(), 1000);
                }
            </script>
            <form method="GET">
                <input type="number" name="alerteid" id="alerteid" placeholder="Enter the alert's id" required>
                <input type="button" value="Modifier" onclick="modifyRecord(event)" data-id="<?php echo $row['alerte_id']?>" class="actionBtns" style="background-color: #55F">
                <input type="button" value="Terminé" onclick="deleteRecord(event)" data-id="<?php echo $row['alerte_id']?>" class="actionBtns" style="background-color: #F58">
            </form>
        </td>
        </tr>
        <?php 
        endwhile; 
        
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            $alerteid = intval($_GET['alerteid']);
            $stmt = $db->prepare("UPDATE alerte SET alerte_statut = 'Terminée' WHERE alerte_id = :id");
            $stmt->execute(['id' => $alerteid]);
        }
        
        ?>
      </tbody>
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
    