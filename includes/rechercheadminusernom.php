<?php

    if(isset($_POST['formrechercheusernom']))
    {
        extract($_POST);
        
        if(!empty($rechercheusernom))
        {
            $o = $db->prepare("SELECT * FROM user WHERE nom = :rechercheusernom");
            $o->execute(['rechercheusernom' => $rechercheusernom]);
            $resultm = $o->fetch();

            // var_dump($resultc);

            if($resultm == true){
            $id = $resultm['id'];
            $nom = $resultm['nom'];
            }
            else {
                echo "Le user que vous avez cherché n'existe pas";
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