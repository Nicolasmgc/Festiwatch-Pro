<?php

    if(isset($_POST['formlogin']))
    {
        extract($_POST);

        if(!empty($lemail) && !empty($lpassword))
        {

            $q = $db->prepare("Select * FROM user WHERE email = :email");
            $q->execute(['email' => $lemail]);
            $result = $q->fetch();

            if($result == true)
            {

                $hashpassword = $result['password'];
                if(password_verify($lpassword, $hashpassword))
                {
                    echo "Le mot de passe est bon, connexion en cours";
                    
                    $_SESSION['id'] = $result['id'];
                    $_SESSION['email'] = $result['email'];
                    $_SESSION['nom'] = $result['nom'];
                    $_SESSION['prenom'] = $result['prenom'];
                    $_SESSION['numtelephone'] = $result['numtelephone'];
                    $_SESSION['adresse'] = $result['adresse'];
                    $_SESSION['pays'] = $result['pays'];
                    $_SESSION['datedenaissance'] = $result['datedenaissance'];
                    $_SESSION['codepostal'] = $result['codepostal'];
                    $_SESSION['ville'] = $result['ville'];
                    $_SESSION['password'] = $result['password'];
                    $_SESSION['datedecreation'] = $result['datedecreation'];
                    $_SESSION['handicap'] = $result['handicap'];
                    header("Location: ../../Vue/monprofiluser/monprofil.php?id=".$_SESSION['id']);
                    
                }
                else
                {
                    echo "Le mot de passe n'est pas correcte";
                }
            }
            else
            {
                echo "Le compte portant l'email " . $lemail . " n'existe pas";
            }

        }
        else
        {
            echo "Veuillez compléter l'ensemble des champs";
        }

    }

?>