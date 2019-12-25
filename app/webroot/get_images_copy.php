<?php 
ini_set('display_errors', 0);
ini_set('memory_limit', '-1');
set_time_limit(0);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(dirname(__FILE__))));

define('CMS_UID', '0');

require_once ROOT . DS . 'config' . DS . 'defines.php';
require_once ROOT . DS . 'config' . DS . 'functions.php';

define('UPL_IMAGES', 'uploads' . DS . CMS_UID . DS . 'images');
define('UPL_FILES', 'uploads' . DS . CMS_UID . DS . 'files');

require_once ROOT . DS . 'web_config' . DS . 'database.php';
$db_con = new DATABASE_CONFIG();
$dbi = mysql_connect($db_con->default['host'], $db_con->default['login'], $db_con->default['password'], TRUE);
mysql_select_db($db_con->default['database'], $dbi);
if(isset($db_con->default['encoding']) && $db_con->default['encoding'] != '') mysql_query("SET NAMES '".$db_con->default['encoding']."'", $dbi);


$r = mysql_query("SELECT  wb_obj_opt_attachment.id, wb_obj_opt_attachment.file, wb_obj_opt_attachment.model, wb_obj_item_list.tid FROM wb_obj_opt_attachment
INNER JOIN wb_obj_item_list ON (wb_obj_item_list.id = wb_obj_opt_attachment.foreign_key)
WHERE wb_obj_opt_attachment.model = 'ObjItemList' AND wb_obj_opt_attachment.size IS NULL LIMIT 100", $dbi);
if(!mysql_num_rows($r)){
    $r = mysql_query("SELECT  wb_obj_opt_attachment.id, wb_obj_opt_attachment.file, wb_obj_opt_attachment.model, wb_obj_item_tree.tid FROM wb_obj_opt_attachment 
    INNER JOIN wb_obj_item_tree ON (wb_obj_item_tree.id = wb_obj_opt_attachment.foreign_key)
    WHERE wb_obj_opt_attachment.model = 'ObjItemTree' AND wb_obj_opt_attachment.size IS NULL LIMIT 100", $dbi); 
}
while($row = mysql_fetch_assoc($r)){
    $file = $row['file'];
    
    if(substr($file, 0, strlen(md5($row['tid'].$row['model']) . '_')) == md5($row['tid'].$row['model']) . '_'){
        $new_file = $file;
    } else {
        $new_file = md5($row['tid'].$row['model']) . '_' . $file;
    }
    
    if(!file_exists(UPL_DIR . DS . UPL_IMAGES . DS . 'large' . DS . $new_file)){
        copy("http://clic.md/sys_files/0/large/{$file}", UPL_DIR . DS . UPL_IMAGES . DS . 'large' . DS . $new_file);
    }
    if(!file_exists(UPL_DIR . DS . UPL_IMAGES . DS . 'thumb' . DS . $new_file)){
        copy("http://clic.md/sys_files/0/small/{$file}", UPL_DIR . DS . UPL_IMAGES . DS . 'thumb' . DS . $new_file);
    }
    mysql_query("UPDATE wb_obj_opt_attachment SET file = '".mysql_escape_string($new_file)."', size = '".filesize(UPL_DIR . DS . UPL_IMAGES . DS . 'large' . DS . $file)."' WHERE id = '{$row['id']}'", $dbi);
}

if(mysql_num_rows($r) > 0){
    //header("Refresh:1");    
    $r = mysql_query("SELECT  COUNT(*) FROM wb_obj_opt_attachment
    WHERE wb_obj_opt_attachment.size IS NULL", $dbi);
    list($count) = mysql_fetch_array($r);
    exit('RELOAD:'.$count.'<script>window.location.reload();</script>');
} else {
    exit('END');
}
?>