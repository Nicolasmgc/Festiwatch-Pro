<?php
session_start()
?>

<?php
  $host = 'localhost';
  $dbname = 'siteweb';
  $username = 'root';
  $password = '';

  global $dsn;
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT reservation.reservation_id, festival.Fest_nom, festival.Fest_datedebut, festival.Fest_datefin 
  FROM ((reservation
  INNER JOIN user ON reservation.id = user.id)
  INNER JOIN festival ON reservation.Fest_id = festival.Fest_id)
  WHERE reservation.id = ".$_SESSION['id'];
   
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
<html>

<head>
           <link rel="stylesheet" href="histouser.css">
           <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
           <h1>Historique de vos festivals</h1>
         </head>


<body>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr> 
          <td><?php echo htmlspecialchars($row['reservation_id']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_nom']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_datedebut']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_datefin']); ?></td>
        </tr>
        <?php endwhile; ?>
      </body>

</html>