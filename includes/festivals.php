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
  $sql = "SELECT * FROM festival";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<?php include 'C:\wamp64\www\includes\database.php';
    global $db;
    ?>


<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="festivals.css">
</br>
<head></head>

<body>
 <h1>Liste des festivals</h1>

 <p>Recherchez votre festival afin de suivre vos données en temps réel. La montre Festiwatch vous sera attribuée une fois arrivé à votre festival.  </p>
 <div class=barre> <form method="post">
    <input type="texte" name="recherche" id="recherche" placeholder="Recherchez le festival que vous souhaitez" required><br/>
    <button><input type="submit" name="formrecherche" id="formrecherche" value="OK"></button>
  </form>
  </div>
 <table class= "fond" style ="background-image:url('fondTable.jpeg');" >
   <thead>
    <div class="scroller">
     <tr>
       <th class="test">ID</th>
       <th>Nom</th>
       <th>Date début</th>
       <th>Date fin</th>
       <th>Prix</th>
       <th>Programmation</th>
       <th>Adresse</th>
       <th>Code postal</th>
       <th>Pays</th>
       <th>Access</th>
       <th>Lien</th>
     </tr>
     </div>
   </thead>


<?php include 'C:\wamp64\www\includes\festivalrecherche.php'; ?>



   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr> 
       <td><?php echo htmlspecialchars($row['Fest_id']); ?></td>
       <td><a href="./Page d'accueil/accueil.php" class=festival ><?php echo htmlspecialchars($row['Fest_nom']); ?></a></td>
       <td><?php echo htmlspecialchars($row['Fest_datedebut']); ?></td>
       <td><?php echo htmlspecialchars($row['Fest_datefin']); ?></td>
       <td><?php echo htmlspecialchars($row['Fest_prix']); ?></td>
       <td><?php echo htmlspecialchars($row['Fest_programmation']); ?></td>
       <td><?php echo htmlspecialchars($row['Fest_adresse']); ?></td>
       <td><?php echo htmlspecialchars($row['Fest_codepostal']); ?></td>
       <td><?php echo htmlspecialchars($row['Fest_pays']); ?></td>
       <td><?php echo htmlspecialchars($row['Fest_access']); ?></td>
       <td><?php echo htmlspecialchars($row['Fest_lien']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>

     </br>



<a href="index.php">Accueil</a>



<?php

if(isset($resultf['Fest_nom']))
{
    ?>
<h1>Bienvenue sur la page du festival <?php echo $resultf['Fest_nom'] ?></h1>
    <h2>Les informations</h2>
    <p>L'id du festival : <?php echo $resultf['Fest_id']; ?> </p>
    <p>Le nom du festival : <?php echo $resultf['Fest_nom']; ?> </p>
    <?php

}else{
    echo "liste des festivals";
}

?>
</body>
</html>

