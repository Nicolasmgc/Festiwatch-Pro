<?php

    if(isset($_POST['formrecherchegestioid']))
    {
        extract($_POST);

        if(!empty($recherchegestioid))
        {
            $x = $db->prepare("SELECT * FROM festival WHERE Fest_id = :recherchegestioid");
            $x->execute(['recherchegestioid' => $recherchegestioid]);
            $resultc = $x->fetch();

            // var_dump($resultc);

            if($resultc == true){
            $Fest_id = $resultc['Fest_id'];
            $Fest_nom = $resultc['Fest_nom'];
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