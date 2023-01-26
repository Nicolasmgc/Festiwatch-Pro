<?php

    if(isset($_POST['sendperso'])){

        extract($_POST);

        if(!empty($Personnel_nom) && !empty($Personnel_prenom) && !empty($Personnel_fonction)){


            $q = $db->prepare("INSERT INTO personnel(Personnel_nom,Personnel_prenom,Personnel_fonction,Fest_id) VALUES (?,?,?,?)");
            $q->execute(["$Personnel_nom","$Personnel_prenom", "$Personnel_fonction", $_SESSION['Fest_id']]);
            echo "Le membre du personnel a bien été ajouté à votre festival";
            $succes = "Le membre du personnel a bien été ajouté";
            header("Location: ../../Vue/ajoutperso/ajoutperso.php?succes=".$succes);
        }else{
            echo "Veuillez remplir tous les champs";
        }


    }