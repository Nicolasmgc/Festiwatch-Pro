<?php

    if(isset($_POST['formrecherche']))
    {
        extract($_POST);

        if(!empty($recherche))
        {
            $k = $db->prepare("SELECT * FROM festival WHERE Fest_nom = :recherche");
            $k->execute(['recherche' => $recherche]);
            $resultf = $k->fetch();

            // var_dump($resultf);
            if($resultf == true){
            $festid = $resultf['Fest_id'];
            $festnom = $resultf['Fest_nom'];
            $festdatedebut = $resultf['Fest_datedebut'];
            $festdatefin = $resultf['Fest_datefin'];
            $festadresse = $resultf['Fest_adresse'];
            $festcodepostal = $resultf['Fest_codepostal'];
            $festpays = $resultf['Fest_pays'];
            $festaccess = $resultf['Fest_access'];
            $festnumtelephone = $resultf['Fest_numtelephone'];
            $festemail = $resultf['Fest_email'];
            $festprogrammation = $resultf['Fest_programmation'];
            header("Location: ../../Vue/infosfestival/Form user 2.php?Fest_id=".$festid."&Fest_nom=".$festnom."&Fest_datedebut=".$festdatedebut."&Fest_datefin=".$festdatefin."&Fest_adresse=".$festadresse."&Fest_codepostal=".$festcodepostal."&Fest_pays=".$festpays."&Fest_access=".$festaccess."&Fest_numtelephone=".$festnumtelephone."&Fest_email=".$festemail."&Fest_programmation=".$festprogrammation);
            }
            else {
                echo "Le festival que vous avez cherché n'existe pas";
            }
            // header("Location: festivalpart.php?id=".$resultf['Fest_id']);


            // if($resultf == true)
            // {
            //     echo "Festival existant";
            // }else {
            //     echo "Festival inexistant";
            // }
           
        }
    }





?>