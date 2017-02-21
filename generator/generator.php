<?php
    $model = $_POST['model'];
    $lens = $_POST['lens'];
    $exposuretime = $_POST['exposure'];
    $exposuremode = $_POST['exposure-mode'];
    $focalLength = $_POST['focalLength'];
    $aperture = $_POST['aperture'];
    $iso = $_POST['iso'];
    function get_htcategories($categories_string) {
        $result = explode(",",$categories_string);
        foreach($result as &$current) {
            $current = trim($current);
        }
        return $result;
    }
    function get_shutter($shutter) {
        $result = ' sec.';
        if($shutter < 1) {
            $result = '1/'.round(1/$shutter).$result;
        }
        else {
            $result = $shutter.$result;
        }
        return $result;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width" />
        <title></title>
    </head>
    <body>
        <?php  
            echo 'Camera: '.$model.',<br />';
            echo 'Lens: '.$lens.',<br />';
            echo 'Exposure: '.$exposuremode.' '.$exposuretime.'sec.,<br />';
            echo 'Aperture: '.$aperture.',<br />';
            echo 'Focal length: '.$focalLength.',<br />';
            echo 'ISO: '.$iso.'.<br />';
        ?>
    </body>
</html>
