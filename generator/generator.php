<?php
    //ini_set('display_errors',1);
    //error_reporting(E_ALL);
    if(empty($_POST['categories'])){
        $exposuretime = get_shutter($_POST['exposure']);
        $exposuremode = get_exposuretext($_POST['exposure-mode']);
        $focalLength = $_POST['focalLength'];
        $aperture = $_POST['aperture'];
        $iso = $_POST['iso'];

        //require_once("../modules/jsondb.php");
        //$jdb  = new Jsondb('/DB/');

        //$camera_data = $jdb->select('*', 'cams', Array('where'=>Array('name'=>$_POST['model']),));
        //$lens_data = $jdb->select('*', 'lens', Array('where'=>Array('id'=>$_POST['lens']),));

        //$outputtext = 'Camera: '.$camera_data[0]['text'].','.PHP_EOL;
        //$outputtext = $outputtext.'Lens: '.$lens_data[0]['text'].','.PHP_EOL;
        $outputtext = $outputtext.'Exposure: '.$exposuremode.' '.$exposuretime.','.PHP_EOL;
        $outputtext = $outputtext.'Aperture: f/'.$aperture.','.PHP_EOL;
        //if($lens_data[0]['needfl'] == 'TRUE') {
        //    $outputtext = $outputtext.'Focal length: '.$focalLength.'mm,'.PHP_EOL;
        //}
        //$outputtext = $outputtext.'ISO: '.$iso.'.'.PHP_EOL;

        //$categoriestext = '';
        //foreach($camera_data[0]['htgroups'] as $category){
        //    $categoriestext = $categoriestext.$category.PHP_EOL;
        //}
        //foreach($lens_data[0]['htgroups'] as $category){
        //    $categoriestext = $categoriestext.$category.PHP_EOL;
        //}
    }
     else {
        //$outputtext = $_POST['outputtext'].generatecategoriestags(explode("\n", str_replace("\r", "", $_POST['categories'])));
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
    function get_exposuretext($exposuremode){
        switch ( $exposuremode ) {
            case 'Manual' :
                return '#manualexposure';
            case 'Normal program' :
                return '#normalprogram';
            case 'Aperture priority' :
                return '#aperturepriority';
            case 'Shutter priority' :
                return '#shutterpriority';
        };
        return $exposuremode;
    }
    //function generatecategoriestags($categories) {
    //    require_once("../modules/jsondb.php");
    //    $jdb  = new Jsondb('/DB/');
    //    $hts_data = $jdb->select('*', 'hts', '');
    //    $result = '';
    //    foreach($hts_data as $currenttag) {
    //        $currenttagtext = $currenttag['tag'].' ';
    //        if(strpos($result, $currenttagtext) === false) {
    //            foreach($currenttag['groups'] as $currentgroup) {
    //                if(in_array($currentgroup, $categories) && ($currentgroup != '')){
    //                    $result = $result.$currenttag['tag'].' ';
    //                }
    //            }
    //            if((count($currenttag['crossgroups']) > 1) && validcross($categories, $currenttag['crossgroups'])) {
    //                $result = $result.$currenttag['tag'].' ';
    //            }
    //        }
    //    }
    //    return $result;
    //}
    function validcross($categories, $crossgroups) {
        foreach($crossgroups as $currentcross) {
            if(($currentcross != '')) {
                if(!in_array($currentcross, $categories)) {
                    return FALSE;
                }
            }
        }
        return TRUE;
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
            <textarea name="categories"><?php echo $categoriestext; ?></textarea><br />
            <textarea name="outputtext"><?php echo $outputtext; ?></textarea><br />
            <input type="submit" value="generate" />
        </form>
    </body>
</html>
