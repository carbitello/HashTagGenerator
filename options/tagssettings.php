<?php
    //ini_set('display_errors',1);
    //error_reporting(E_ALL);
    require_once("../modules/jsondb.php");
    $jdb  = new Jsondb('/DB/');
    if(!($jdb->exists('hts'))) {
        $keys = Array(
	        'tag',
	        'groups' => Array(), 
	        'crossgroups' => Array()
        );
        $result = $jdb->create('hts', $keys);
    }
    //echo '<pre>'.print_r($_POST['htarray'],1).'</pre>';
    //echo $_POST['htarray'];
    //echo $_POST['htarray'][1];
    if(!empty($_POST['htarray'])){
        $tags = explode("\n", str_replace("\r", "", $_POST['htarray']));
        foreach($tags as $current){
            $tagarray = explode("|",$current);
            $tag = $tagarray[0];
            $groups = get_htcategories($tagarray[1]);
            $crossgroups = get_htcategories($tagarray[2]);
            $data = Array('tag'=>$tag, 'groups'=>$groups, 'crossgroups'=>$crossgroups);
            $result = $jdb->insert('hts', $data);
        }
    }
    if(!empty($_POST['tag'])){
        $tag = $_POST['tag'];
        $groups = get_htcategories($_POST['groups']);
        $crossgroups = get_htcategories($_POST['crossgroups']);
        $data = Array('tag'=>$tag, 'groups'=>$groups, 'crossgroups'=>$crossgroups);
        $result = $jdb->insert('hts', $data);
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
        <form method="post" action="tagssettings.php">
            <span>HashTag</span><input type="text" id="tag" name="tag" /><br />
            <span>groups</span><input type="text" id="groups" name="groups" /><br />
            <span>crossgroups</span><input type="text" id="crossgroups" name="crossgroups" /><br />
            <textarea name="htarray"></textarea><br />
            <input type="submit" value="submit" />
        </form>
    </body>
</html>
