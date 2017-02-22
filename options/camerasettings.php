<?php
    //$model = $_POST['model'];
    //ini_set('display_errors',1);
    //error_reporting(E_ALL);
    require_once("../modules/jsondb.php");
    $jdb  = new Jsondb('/DB/');
    if(!($jdb->exists('cams'))) {
        $keys = Array(
	        'name',
	        'text', 
	        'htgroups' => Array()
        );
        $result = $jdb->create('cams', $keys);
    }
    if(!empty($_POST['camarray'])){
        $lens = explode("\n", str_replace("\r", "", $_POST['camarray']));
        foreach($lens as $current){
            $lensarray = explode("|",$current);
            $name = $lensarray[0];
            $text = $lensarray[1];
            $htgroups = get_htcategories($lensarray[2]);
            $data = Array('name'=>$name, 'text'=>$text, 'htgroups'=>$htgroups);
            $result = $jdb->insert('cams', $data);
        }
    }
    function get_htcategories($categories_string) {
        $result = explode(",",$categories_string);
        foreach($result as &$current) {
            $current = trim($current);
        }
        return $result;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width" />
    </head>
    <body>
        <form method="post" action="camerasettings.php">
            <!--<span>HashTag</span><input type="text" id="tag" name="tag" /><br />
            <span>groups</span><input type="text" id="groups" name="groups" /><br />
            <span>crossgroups</span><input type="text" id="crossgroups" name="crossgroups" /><br />-->
            <textarea name="camarray"></textarea><br />
            <input type="submit" value="submit" />
        </form>
    </body>
</html>