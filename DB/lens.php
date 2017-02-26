<?php
    $lensID = $_GET['lensID'];
    $string = file_get_contents("lens.json");
    $json_a = json_decode($string, true);
    $result ='<select>';
    $defaultresult='<select>';
    foreach($json_a as $currentlens) {
        $currentoption = '<option>'.$currentlens['name'].'</option>';
        if($currentlens['id'] == $lensID) {
            $result = $result.$currentoption;
        }
        $defaultresult = $defaultresult.$currentoption;
    }
    if(!empty($result)) {
        $result = $defaultresult;
    }
    $result = $result.'</select>';
    echo $result;
?>