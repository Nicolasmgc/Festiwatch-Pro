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