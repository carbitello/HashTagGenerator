<?php
    $lensID = $_GET['lensID'];
    $string = file_get_contents("lens.json");
    $json_a = json_decode($string, true);
    $result ='';
    $defaultresult='';
    foreach($json_a as $currentlens) {
        $currentoption = '<option>'.$currentlens['name'].'</option>';
        if($currentlens['id'] == $lensID) {
            $result = $result.$currentoption;
        }
        $defaultresult = $defaultresult.$currentoption;
    }
    if(empty($result)) {
        $result = $defaultresult;
    }
    $result = '<select>'.$result.'</select>';
    echo $result;
?>