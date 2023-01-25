<?php

    if(isset($_POST['montrerecherche'])){

        extract($_POST);

        if(!empty($searchbar)){

            $r = $db->prepare("SELECT montre.Montre_code, capteursonore.son_db, capteurgaz.gaz_detec, capteurcardiaque.card_frequ, compteur.compteur_alcool, montre.Fest_id
            FROM montre
            INNER JOIN capteursonore ON capteursonore.Montre_code = montre.Montre_code
            INNER JOIN capteurgaz ON capteurgaz.Montre_code = montre.Montre_code
            INNER JOIN capteurcardiaque ON capteurcardiaque.Montre_code = montre.Montre_code
            INNER JOIN compteur ON compteur.Montre_code = montre.Montre_code
            WHERE montre.Montre_code = :searchbar AND montre.Fest_id = :Fest_id");
            $r->execute(['searchbar' => $searchbar,
            'Fest_id' => $_GET['Fest_id']
            ]);
            $result = $r->fetch();

            if($result == TRUE){
                $Montre_code = $result['Montre_code'];
                $son_db = $result['son_db'];
                $gaz_detect = $result['gaz_detec'];
                $card_frequ = $result['card_frequ'];
                $compteur_alcool = $result['compteur_alcool'];
                $_SESSION['Montre_code'] = $result['Montre_code'];
                $Fest_id = $result['Fest_id'];

                header("Location: ../../Vue/UserData/userData.php?son_db=".$son_db."&gaz_detec=".$gaz_detect."&card_frequ=".$card_frequ."&compteur_alcool=".$compteur_alcool."&Fest_id=".$Fest_id);
            }

        }

    }




?>