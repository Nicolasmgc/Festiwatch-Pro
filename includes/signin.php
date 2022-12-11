<?php



        if(isset($_POST['formsend'])){
            
            extract($_POST);

            if(!empty($password) && !empty($cpassword) && !empty($semail)&& !empty($nom) && !empty($prenom) && !empty($numtelephone) && !empty($adresse) && !empty($pays) && !empty($datedenaissance) && !empty($codepostal) && !empty($ville)){

                if($password== $cpassword){
                   
                    $options = [
                        'cost' => 12,
                    ];
                    $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

                    $c = $db->prepare("SELECT email FROM user WHERE email = :email");
                    $c->execute([
                        'email' => $semail]);

                    $result = $c->rowCount();

                    $b = $db->prepare("SELECT numtelephone FROM user WHERE numtelephone = :numtelephone");
                    $b->execute([
                        'numtelephone' => $numtelephone]);

                        $result2 = $b->rowCount();

                    if($result == 0){
                        if($result2 == 0){
                            $q = $db->prepare("INSERT INTO user(nom,prenom,email,numtelephone,adresse,pays,datedenaissance,codepostal,ville,password,handicap) VALUES(:nom,:prenom,:email,:numtelephone,:adresse,:pays,:datedenaissance,:codepostal,:ville,:password,:handicap)");
                            $q->execute([
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'email' => $semail,
                                'numtelephone' => $numtelephone,
                                'adresse' => $adresse,
                                'pays' => $pays,
                                'datedenaissance' => $datedenaissance,
                                'codepostal' => $codepostal,
                                'ville' => $ville,
                                'password' => $hashpass,
                                'handicap' => $handicap
                            ]);
                        echo "Le compte a été créé";
                        header("Location: login1.php");
                        }else {
                            echo "Ce numéro de téléphone est déjà utilisé";
                        }
                        
                    }else {
                        echo "Cet email est déjà utilisé";
                    }



                }
                

                // if(password_verify('houssem18', $hashpass)){
                //     echo "le mot de pass est le même";
                // }   else {
                //     echo "le mot de passe n'est pas correcte";
                }else {
                    echo "les champs ne sont pas tous remplis";
                }

            }


        
        
    ?>