<?php
    //ini_set('display_errors',1);
    //error_reporting(E_ALL);
    //$lens = $_POST['lens'];
    require_once("../modules/jsondb.php");
    $jdb  = new Jsondb('/DB/');
    if(!($jdb->exists('lens'))) {
        $keys = Array(
	        'name',
	        'text', 
	        'htgroups' => Array(),
            'needfl',
            'id'  => Array('default' => '0.0 mm f/0.0'),
        );
        $result = $jdb->create('lens', $keys);
    }
    if(!empty($_POST['htarray'])){
        $lens = explode("\n", str_replace("\r", "", $_POST['htarray']));
        foreach($lens as $current){
            $lensarray = explode("|",$current);
            $name = $lensarray[0];
            $text = $lensarray[1];
            $htgroups = get_htcategories($lensarray[2]);
            $needfl = $lensarray[3];
            $id = $lensarray[4];
            $data = Array('name'=>$name, 'text'=>$text, 'htgroups'=>$htgroups, 'needfl'=>$needfl, 'id'=>$id);
            $result = $jdb->insert('lens', $data);
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
        <form method="post" action="lenssettings.php">
            <!--<span>HashTag</span><input type="text" id="tag" name="tag" /><br />
            <span>groups</span><input type="text" id="groups" name="groups" /><br />
            <span>crossgroups</span><input type="text" id="crossgroups" name="crossgroups" /><br />-->
            <textarea name="htarray"></textarea><br />
            <input type="submit" value="submit" />
        </form>
    </body>
</html>