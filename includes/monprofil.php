<?php
session_start();
if(isset($_SESSION['email']) && (isset($_SESSION['nom'])))
{
    ?>
         <!DOCTYPE html>
     <html>
        <head>
           <link rel="stylesheet" href="Login2.css">
           <h1>Bienvenue sur votre profil</h1>
         </head>
     <body> 
     <div class="round"> 
     <p>Votre email </p>
     <?php echo $_SESSION['email']; ?> 
     <p>Votre nom </p>
     <?php echo $_SESSION['nom']; ?>
     <p>Votre prénom</p> 
    <?php echo $_SESSION['prenom']; ?> 
    <p>Votre numéro de téléphone </p>
    <?php echo $_SESSION['numtelephone']; ?> 
    <p>Votre adresse </p>
     <?php echo $_SESSION['adresse']; ?> 
    <p>Votre ville </p>
     <?php echo $_SESSION['ville']; ?> 
    </div>


    <a href="deconnexion.php">Déconnexion</a>

    <a href="deleteuser.php">Supprimer votre compte</a>

    <a href="..\index.php">Page d'accueil</a>

    <a href="festivals.php">Liste des festivals</a>
    
</body>
</html>

    
    
    <?php

}else{
    echo "Veuillez vous connecter à votre compte";
}

?>



<!-- <style type="text/css">


* {box-sizing: border-box;}

html,body{
    height: 100%;
}

a,button{
    cursor: pointer;
}

@keyframes pan {
    100% { background-position: 30% 50%;}
    
    
}

body {
    display: grid;
    place-items: center;
    margin: 0;
    padding: 0 24px;
    background-image: url("bg.svg");
    background-repeat: no-repeat;
    background-size: cover;
    animation: 
    pan 4s infinite alternate linear;
}
@media(width >= 500px){
    body{
        padding: 0;
    }
}

.login-card{
    width: 100%;
    padding: 70px 30px 44px;
    border-radius: 24px;
    background: white;
    text-align: center;
}
@media(width >= 500px){
    .login-card{
        margin: 0;
        width: 400px;
    }
}

.login-card>h2{
    margin: 0 0 12px;
    font-size: 36px;
    font-weight: 600;
}
.login-card>h3{
    margin: 0 0 30px;
    font-weight: 500;
    font-size: 16px;
    color: rgb(130, 130, 227);
}

.login-form{
    width: 100%;
    margin: 0;
    display: grid;
    gap: 16px;
}

.login-form > a {color: rgb(184, 209, 17) }

.login-form>input,
.login-form>button{
    width: 100%;
    height: 56px;
    padding: 0 16px;
    border-radius: 8px;
}

.login-form>input{
    border: 2px solid rgb(40, 40, 97);
}

.login-form>button{
    width: 100%;
    height: 56px;
    border: 0;
    background: blue;
    color: beige;
    font-weight: 600;
}

h1{
    font-family: Arial, Helvetica, sans-serif;
    color: blueviolet;
}
.round{
    border: 5px solid blue;
    padding: 150px;
    border-radius: 50%;
    height: 600px;
    width: 600px;
}
p{
    font-size: 20px;
    margin-left: auto;
  margin-right: auto;
} -->