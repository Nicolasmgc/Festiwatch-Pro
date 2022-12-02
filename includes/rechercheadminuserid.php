<?php

    if(isset($_POST['formrechercheuserid']))
    {
        extract($_POST);
        
        if(!empty($rechercheuserid))
        {
            $x = $db->prepare("SELECT * FROM user WHERE id = :rechercheuserid");
            $x->execute(['rechercheuserid' => $rechercheuserid]);
            $resultc = $x->fetch();

            var_dump($resultc);

            if($resultc == true){
            $id = $resultc['id'];
            $nom = $resultc['nom'];
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