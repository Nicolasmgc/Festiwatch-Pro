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

<nav>
            <ul>
               <li><img src="Logo alternatif2.png" class="logo" >  </a></li>   
                  
                <li><a href="Page d'accueil/index.php" > Accueil </a></li>
                <li><a href="Page d'accueil/FAQ/faq.php"> FAQ </a></li>
                <li><a href="Page d'accueil/AProposDeNous/A_propos_de_nous.php"> A propos de nous </a></li>
                
                <li class="deroulant"><?php if(isset($_SESSION['email'])){
                            ?>
                        
                      <a><?php echo $_SESSION['email'];?></a>
                        <ul class="sous">
                            <li><a href="monprofil.php"> Voir mon profil </a></li>
                            <li><a href="deconnexion.php"> Se déconnecter </a></li>
                        </ul>           
                        


                        <?php
                        }
                        
                        elseif(isset($_SESSION['Fest_id'])){
                            ?>


                        <a><?php echo $_SESSION['Fest_nom'];?></a>
                        <ul class="sous">
                            <li><a href="ConnexionGestionnaire/mesinfos.php?Fest_id=".$_SESSION['Fest_id']> Voir mes infos </a></li> <?php // Truc très ghetto ça marche moyennement ce href faire gaffe pendant la démo ?>
                            <li><a href="deconnexion.php"> Se déconnecter </a></li>
                        </ul>  


                            <?php
                        }
                        
                        else{ ?>
                        <li><a href="login1.php">Se connecter </a></li>
                        
                        <?php } ?></a>
                          
                    
                    
                    
                </li>
                
                
                
                
            </ul>
        </nav>

<body>
 <h1>Liste des festivals</h1>

 <p>Recherchez votre festival afin de suivre vos données en temps réel. La montre Festiwatch vous sera attribuée une fois arrivé à votre festival.  </p>
 <div class=barre> <form method="post">
    <input type="texte" name="recherche" id="recherche" placeholder="Recherchez le festival que vous souhaitez" required><br/>
    <button><input type="submit" name="formrecherche" id="formrecherche" value="OK"></button>
  </form>
  </div>
  <div style="overflow-x:scroll">
    <table class= "fond" style ="background-image:url('fondTable.jpeg');overflow-x:scroll; margin-top: 50px" >
      <thead>
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
          <th>Numéro de téléphone</th>
          <th>Adresse mail</th>
        </tr>
      </thead>


    <?php include 'festivalrecherche.php'; ?>



      <tbody>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr> 
          <td><?php echo htmlspecialchars($row['Fest_id']); ?></td>
          <td><a href="Form user 2.php?Fest_id=<?php echo $row['Fest_id'];?>&amp;Fest_nom=<?php echo $row['Fest_nom'];?>&amp;Fest_datedebut=<?php echo $row['Fest_datedebut'];?>&amp;Fest_datefin=<?php echo $row['Fest_datefin'];?>&amp;Fest_adresse=<?php echo $row['Fest_adresse'];?>&amp;Fest_codepostal=<?php echo $row['Fest_codepostal'];?>&amp;Fest_pays=<?php echo $row['Fest_pays'];?>&amp;Fest_access=<?php echo $row['Fest_access'];?>&amp;Fest_numtelephone=<?php echo $row['Fest_numtelephone'];?>&amp;Fest_email=<?php echo $row['Fest_email'];?>&amp;Fest_programmation=<?php echo $row['Fest_programmation']?>" class=festival ><?php echo htmlspecialchars($row['Fest_nom']); ?></a></td>
          <td><?php echo htmlspecialchars($row['Fest_datedebut']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_datefin']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_prix']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_programmation']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_adresse']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_codepostal']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_pays']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_access']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_lien']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_numtelephone']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_email']); ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

     </br>







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
    echo "";
}

?>
</body>
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
            <a href="https://www.instagram.com/pro_detech"> <img src="insta.png" alt="icone de insta" height="60"></a>
            <img src="youtube.png" alt="icone de insta" height="70">
            <img src="twitter.png" alt="icone de insta" height="75">
            </div>
            <div class="lien">
            <a href="./cgu.php">Conditions général d'utilisation</a>
            <a href="#">Connexion</a>
            </div> </div>
             </footer>
</html>

