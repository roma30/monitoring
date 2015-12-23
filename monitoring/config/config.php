<?php
/*$db_location="localhost"; //не меняется
$db_name="monitoring"; // имя компании в нете
$db_user="root"; // имя компании в нете
$db_password=""; // имя компании в нете*/


define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "monitoring");
define("DB_PORT",3307);

/*try{
$db=new PDO('mysql:host=localhost;port=3306;dbname=monitoring',USER,PASSWORD);
}catch (PDOException $e){
echo $e->getMessage();
}*/



/*$db_con=mysql_connect($db_location,$db_user,$db_password);
if ( !$db_con) {
exit("незя, server error");
}

$db_sel=mysql_select_db($db_name,$db_con);
if (!$db_sel) {
exit ("use db error");
}

@mysql_query("SET NAMES 'utf-8'");*/

