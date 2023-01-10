<?php
if(isset($_POST['formlogingestio'])){
    extract($_POST);
    if(!empty($Cl_nom) && !empty($Cl_prenom) && !empty($Cl_email) && !empty($Cl_num)){


        $c2 = $db->prepare("SELECT  festsign_email FROM festsign WHERE festsign_email = :festsign_email");
        $c2->execute(
            [
                'festsign_email' => $Cl_email
            ]
        );
        $resultff = $c2->rowCount();
        if($resultff == 0){
            $q2 = $db->prepare("INSERT INTO festsign(festsign_id, festsign_nom, festsign_prenom, festsign_email, festsign_numtel, festsign_adresse, festsign_remarque) VALUES(:festsign_id, :festsign_nom, :festsign_prenom, :festsign_email, :festsign_numtel, :festsign_adresse, :festsign_remarque)");
            $q2->execute(
                [
                    'festsign_nom' => $Cl_nom,
                    'festsign_prenom' => $Cl_prenom,
                    'festsign_email' => $Cl_email,
                    'festsign_numtel' => $Cl_num,
                    'festsign_adresse' => $Cl_adresse,
                    'festsign_remarque' => $req


                ]);
            echo "Votre demande a été créé";
        }else{
            echo"Cet email est déjà utilisé";
        }
    

            


        }
    }

