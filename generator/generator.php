<?php
    $model = $_POST['model'];
    $lens = $_POST['lens'];
    $exposuretime = get_shutter($_POST['exposure']);
    $exposuremode = $_POST['exposure-mode'];
    $focalLength = $_POST['focalLength'];
    $aperture = $_POST['aperture'];
    $iso = $_POST['iso'];

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
        <form method="post" action="generator.php">
            <?php  
                echo 'Camera: '.$model.',<br />';
                echo 'Lens: '.$lens.',<br />';
                echo 'Exposure: '.$exposuremode.' '.$exposuretime.',<br />';
                echo 'Aperture: f/'.$aperture.',<br />';
                echo 'Focal length: '.$focalLength.',<br />';
                echo 'ISO: '.$iso.'.<br />';
            ?>
            <textarea name="categories"></textarea><br />
            <textarea name="outputtext"></textarea><br />
            <input type="submit" value="submit" />
        </form>
    </body>
</html>
