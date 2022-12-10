<?php

    if(isset($_POST['formsendgestio'])){ // si la variable est définie

    extract($_POST);
    if(!empty($fest_password) && !empty($fest_passwordc) && !empty($Fest_email) && !empty($Fest_numtelephone) && !empty($Fest_access) && !empty($Fest_adresse) && !empty($Fest_codepostal)&& !empty($Fest_datedebut) && !empty($Fest_datefin) && !empty($Fest_lien) && !empty($Fest_nom) && !empty($Fest_pays) && !empty($Fest_prix) && !empty($Fest_programmation)){
        if($fest_password== $fest_passwordc){
                   
            $options1 = [
                'cost' => 12,
            ];
            $hashpassf = password_hash($fest_password, PASSWORD_BCRYPT, $options1);

            $c1 = $db->prepare("SELECT Fest_nom FROM festival WHERE Fest_nom = :Fest_nom");
            $c1->execute(
                [
                    'Fest_nom' => $Fest_nom
                ]
            );
            $resultf = $c1->rowCount();

            if($resultf == 0){
                $q1 = $db->prepare("INSERT INTO festival(Fest_nom, Fest_email, Fest_numtelephone, Fest_datedebut,Fest_datefin,Fest_prix,Fest_programmation,Fest_adresse,Fest_codepostal,Fest_pays,Fest_access,Fest_lien,Fest_password) VALUES(:Fest_nom, :Fest_email, :Fest_numtelephone, :Fest_datedebut,:Fest_datefin,:Fest_prix,:Fest_programmation,:Fest_adresse,:Fest_codepostal,:Fest_pays,:Fest_access,:Fest_lien,:Fest_password)");
                $q1->execute([
                    'Fest_nom' => $Fest_nom,
                    'Fest_email' => $Fest_email,
                    'Fest_numtelephone' => $Fest_numtelephone,
                    'Fest_datedebut' => $Fest_datedebut,
                    'Fest_datefin' => $Fest_datefin,
                    'Fest_prix' => $Fest_prix,
                    'Fest_programmation' => $Fest_programmation,
                    'Fest_adresse' => $Fest_adresse,
                    'Fest_codepostal' => $Fest_codepostal,
                    'Fest_pays' => $Fest_pays,
                    'Fest_access' => $Fest_access,
                    'Fest_lien' => $Fest_lien,
                    'Fest_password' => $hashpassf

                ]);
                echo "Le compte a été créé";
            }else{
                echo"Ce nom est déjà utilisé";
            }

            }

        }else {echo "erreur";
        }
    }

    

?>