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
<h1>Historique de vos festivals</h1>
<head>
            <link rel="stylesheet" href="histouser.css">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
            

            <style>
                .goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
                    display: none !important;
                }
                body {
                    top: 0px !important;
                }
                .goog-tooltip {
                    display: none !important;
                }
                .goog-tooltip:hover {
                    display: none !important;
                }
                .goog-text-highlight {
                    background-color: transparent !important;
                    border: none !important;
                    box-shadow: none !important;
                }
            </style>
         </head>


<body> 
<input class="button"
       type="button"
       value="Mon profil">
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr class="test"> 
          <td><?php echo htmlspecialchars($row['reservation_id']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_nom']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_datedebut']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_datefin']); ?></td>
        </tr>
        <?php endwhile; ?>
      </body>
    </body>
    <footer>
           <div class="contact">
           <br>
            Nous contacter <br>
            Mail :<br> prodetech@gmail.com <br>
            Numéro :<br> 068975412 <br>
            Adresse :<br>10 Rue de Vanves, 92130 Issy-les-Moulineaux
            </div>
         
            <div class="foot">
            <div class="reseaux">
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta" height="60"></a>
            <img src="../../../PNG/youtube.png" alt="icone de insta" height="70">
            <img src="../../../PNG/twitter.png" alt="icone de insta" height="75">
            </div>
            <div class="lien">
            <a href="../CGU/cgu.php">Conditions générales d'utilisation</a>
            <a href="../FAQ/faq.php"> FAQ</a>
            <a href="../Connexionuser/login1.php">Connexion</a>
            </div> </div>
             </footer>

</html>