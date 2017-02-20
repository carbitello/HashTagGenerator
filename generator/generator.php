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
