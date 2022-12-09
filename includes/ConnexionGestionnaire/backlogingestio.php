<?php

    if(isset($_POST['formlogingestio']))
    {
        extract($_POST);

        if(!empty($lfest_nom) && !empty($fpassword))
        {

            $q2 = $db->prepare("Select * FROM festival WHERE Fest_nom = :Fest_nom");
            $q2->execute(['Fest_nom' => $lfest_nom]);
            $result = $q2->fetch();

            if($result == true)
            {

                $hashpasswordf = $result['Fest_password'];
                if(password_verify($fpassword, $hashpasswordf))
                {
                    echo "Le mot de passe est bon, connexion en cours";
                    
                    $_SESSION['Fest_id'] = $result['Fest_id'];
                    $_SESSION['Fest_nom'] = $result['Fest_nom'];
                    $_SESSION['Fest_password'] = $result['Fest_password'];
                }
                else
                {
                    echo "Le mot de passe n'est pas correcte, veuillez réessayer";
                }
            }
            else
            {
                echo "Le festival ayant comme nom " . $lfest_nom . " n'existe pas";
            }

        }
        else
        {
            echo "Veuillez compléter l'ensemble des champs";
        }

    }

?>