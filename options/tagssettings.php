<?php
    $model = $_POST['model'];
    $lens = $_POST['lens'];
    $exposuretime = $_POST['exposure'];
    $exposuremode = $_POST['exposure-mode'];
    $focalLength = $_POST['focalLength'];
    $aperture = $_POST['aperture'];
    $iso = $_POST['iso'];
    echo 'Settings - <br />';
    echo 'Camera: '.$model.',<br />';
    echo 'Lens: '.$lens.',<br />';
    echo 'Exposure mode: '.$exposuremode.',<br />';
    echo 'Exposure time: '.$exposuretime.'sec.,<br />';
    echo 'Aperture: '.$aperture.',<br />';
    echo 'Focal length: '.$focalLength.',<br />';
    echo 'ISO: '.$iso.'.<br />';

//    //ini_set('display_errors',1);
//    //error_reporting(E_ALL);
//    require_once("Jsondb.php");
//    //$path = 'C:\\Users\\Jukov\\Documents\\My Web Sites\\EmptySite1\\jdb\\';
//    $jdb  = new Jsondb();

//    if(empty($_POST['tag'])){
//        if(!($jdb->exists('hts'))) {
//            $keys = Array(
//	            'tag',
//	            'groups', 
//	            'crossgroups'
//            );
//            $result = $jdb->create('hts', $keys);
//        }
//    } else {
//        $data = Array('tag'=>$_POST['tag'], 'groups'=>$_POST['groups'], 'crossgroups'=>$_POST['crossgroups']);
//        $result = $jdb->insert('hts', $data);
//}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width" />
    </head>
    <body>
        
    </body>
</html>
