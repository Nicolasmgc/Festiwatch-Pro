<?php
session_start();

if(isset($_SESSION['Fest_id'])){
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
    <p> Vous êtes sur la page du festival <?php echo $_SESSION['Fest_nom']; ?> </p>
<div class= page> <!-- C'est pour naviguer entre les pages de différents festivals -->

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
        <tr> 

          <td class = 'id'><?php echo htmlspecialchars($row['alerte_id']); ?></td>
          <td class = 'code'><?php echo htmlspecialchars($row['Montre_code']); ?></td>
          <td class = 'zone'><?php echo htmlspecialchars($row['alerte_zone']); ?></td>
          <td class = 'date'><?php echo htmlspecialchars($row['alerte_date']); ?></td>
          <td class = 'horaire'><?php echo htmlspecialchars($row['alerte_horaire']); ?></td>
          <td class = 'personnel'><?php echo htmlspecialchars($row['Personnel_nom']); ?></td>
          <td class = 'statut'><?php echo htmlspecialchars($row['alerte_statut']); ?></td>
          <td class = 'type'><?php echo htmlspecialchars($row['alerte_type']); ?></td>
        <tr>
            
            <form method="POST">
                <input type="number" name="alerteid" id="alerteid" placeholder="Enter the alert's id" required>
                <input type="number" name="gestioid" id="gestioid" placeholder="Enter the personel's id">
                <input type="submit" name="Modifier" value="Modifier" class="actionBtns" style="background-color: #55F">
                <input type="submit" name="Terminer" value="Terminer" class="actionBtns" style="background-color: #F58">
            </form>
        </td>
        </tr>
        <?php 
        endwhile; 
        
        if (isset($_POST['Terminer'])) {
            $alerteid = intval($_POST['alerteid']);
            echo 'TERMINATION OF ALERT WITH ID '. $alerteid;
            $stmt = $db->prepare("UPDATE alerte SET alerte_statut = 'Terminee' WHERE alerte_id = :id");
            $stmt->execute(['id' => $alerteid]);
        }

        if(isset($_POST['Modifier'])){
            $alerteid = intval($_POST['alerteid']);
            $gestioid = intval($_POST['gestioid']);
            echo 'MODIFICATION OF ALERT WITH ID '. $alerteid;
            $stmt = $db->prepare("UPDATE alerte SET alerte_statut = 'Modifiee' WHERE alerte_id = :id");
            $stmt->execute(['id' => $alerteid]);
            $stmt2 = $db->prepare("UPDATE alerte SET Personnel_id = :gestioid; WHERE alerte_id = :id");
            $stmt2->execute(['gestioid' => $gestioid, 'id' => $alerteid]);
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
            <a href="../../../Modele/listealerte/filtrealerte.php">lalalala</a>
            </div> </div>
             </footer>
    </body>
    

    <script>
        xmlhttp=new XMLHttpRequest();
        xmlhttp.open("POST","../../../Modele/listealerte/filtrealerte.php",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("fname=Henry&lname=Ford");
        xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            var tab=JSON.parse(xmlhttp.responseText);
            console.log(tab[0][0])
            for(r of tab){
                console.log(r[1])

            document.getElementsByTagName('tbody')[0].innerHTML=r[0]
            document.getElementsByTagName('tbody')[1].innerHTML=r[1]
            document.getElementsByClassName('zone')[2].innerHTML=r[2]
            document.getElementsByClassName('date')[3].innerHTML=r[3]
            document.getElementsByClassName('horaire')[4].innerHTML=r[4]
            document.getElementsByClassName('personnel')[5].innerHTML=r[5]
            document.getElementsByClassName('statut')[6].innerHTML=r[6]
            document.getElementsByClassName('type')[7].innerHTML=r[7]
                
            }
    }
}
        </script>

    <?php

    }else{
        ?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../../Controller/errors/erreur.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
<head>
    <title>Erreur</title>
</head>
<body>
<div class="fond">
    <div class="round">
        Erreur cette page est reservée aux festivals !</br>
        Veuillez retouner à la page d'accueil !</br>
        <button ><a href=" ../Pagedaccueil/index.php"  style="text-decoration:none">Page d'accueil</a></button>
        </div>
</div>


<img src="../../../PNG/errorimage.png" alt="image d'erreur">

</body>

</html>

        <?php
    }

?>