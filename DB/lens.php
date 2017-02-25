<?php
    $lensID = $_GET['lensID'];
    $string = file_get_contents("lens.json");
    $json_a = json_decode($string, true);
    $result ='<select>';
    foreach($json_a as $currentlens){
        if($currentlens['id'] == $lensID)
            $result = $result.'<option>'.$currentlens['name'].'</option>';
    }
    $result =$result.'</select>';
    echo $result;
?>