<?php
    $model = $_POST['model'];
    $lens = $_POST['lens'];
    $exposuretime = $_POST['exposure'];
    $exposuremode = $_POST['exposure-mode'];
    $focalLength = $_POST['focalLength'];
    $aperture = $_POST['aperture'];
    $iso = $_POST['iso'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width" />
    </head>
    <body>
        <?php  
            echo 'Settings - <br />';
            echo 'Camera: '.$model.',<br />';
            echo 'Lens: '.$lens.',<br />';
            echo 'Exposure mode: '.$exposuremode.',<br />';
            echo 'Exposure time: '.$exposuretime.'sec.,<br />';
            echo 'Aperture: '.$aperture.',<br />';
            echo 'Focal length: '.$focalLength.',<br />';
            echo 'ISO: '.$iso.'.<br />';
        ?>
    </body>
</html>