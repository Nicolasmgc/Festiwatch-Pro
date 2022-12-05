<?php

    if(isset($_POST['formsendgestio'])){ // si la variable est définie

    extract($_POST);
    if(!empty($fest_password) && !empty($Fest_access) && !empty($Fest_adresse) && !empty($Fest_codepostal)&& !empty($Fest_datedebut) && !empty($Fest_datefin) && !empty($Fest_id) && !empty($Fest_lien) && !empty($Fest_nom) && !empty($Fest_nom) && !empty($Fest_pays) && !empty($Fest_prix) && !empty($Fest_programmation)){
        if($fest_password== $fest_passwordc){


            $c = $db->prepare("SELECT Fest_nom FROM festival WHERE nom = :nom");
            $c->execute(
                [
                    'Fest_nom' => $Fest_nom
                ]
            );
            $result = $c->rowCount();

            if($result == 0){
                $q = $db->prepare("INSERT INTO festival(Fest_id,Fest_nom,Fest_datedebut,Fest_datefin,Fest_prix,Fest_programmation,Fest_adresse,Fest_codepostal,Fest_pays,Fest_access,Fest_lien,Fest_password) VALUES(:Fest_id,:Fest_nom,:Fest_datedebut,:Fest_datefin,:Fest_prix,:Fest_programmation,:Fest_adresse,:Fest_codepostal,:Fest_pays,:Fest_access,:Fest_lien,:Fest_password)");
                $q->execute([
                    'Fest_id' => $Fest_id,
                    'Fest_nom' => $Fest_nom,
                    'Fest_datedebut' => $Fest_datedebut,
                    'Fest_datefin' => $Fest_datefin,
                    'Fest_prix' => $Fest_prix,
                    'Fest_programmation' => $Fest_programmation,
                    'Fest_adresse' => $Fest_adresse,
                    'Fest_codepostal' => $Fest_codepostal,
                    'Fest_pays' => $Fest_pays,
                    'Fest_access' => $Fest_access,
                    'Fest_lien' => $Fest_lien,
                    'Fest_password' => $fest_password


                ]);
                echo "Le compte a été créé";
            }else{
                echo"Ce nom est déjà utilisé";
            }

                
            
            
            }

        }
    }

    

?>