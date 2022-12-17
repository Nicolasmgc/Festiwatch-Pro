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
                    $_SESSION['Fest_email'] = $result['Fest_email'];
                    $_SESSION['Fest_numtelephone'] = $result['Fest_numtelephone'];
                    $_SESSION['Fest_access'] = $result['Fest_access'];
                    $_SESSION['Fest_adresse'] = $result['Fest_adresse'];
                    $_SESSION['Fest_codepostal'] = $result['Fest_codepostal'];
                    $_SESSION['Fest_datedebut'] = $result['Fest_datedebut'];
                    $_SESSION['Fest_datefin'] = $result['Fest_datefin'];
                    $_SESSION['Fest_lien'] = $result['Fest_lien'];
                    $_SESSION['Fest_pays'] = $result['Fest_pays'];
                    $_SESSION['Fest_prix'] = $result['Fest_prix'];
                    $_SESSION['Fest_programmation'] = $result['Fest_programmation'];
                    $_SESSION['Fest_password'] = $result['Fest_password'];
                    header("Location: ../../Vue/mesinfosgestio/mesinfos.php?Fest_id=".$_SESSION['Fest_id']);
                }
                else
                {
                    echo "Le mot de passe de ce festival n'est pas correcte";
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