<?php
<<<<<<< HEAD
/*$db_location="localhost"; //не меняется
$db_name="monitoring"; // имя компании в нете
$db_user="root"; // имя компании в нете
$db_password=""; // имя компании в нете*/

=======
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
<<<<<<< HEAD
define("DB_NAME", "monitoring");
define("DB_PORT",3306);

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

=======
define("DB_NAME", "novosti");
define("DB_PORT",3307);


/*try{
$db=new PDO('mysql:host=localhost;port=3307;dbname=novosti',USER,PASSWORD);
}catch (PDOException $e){
echo $e->getMessage();
}*/
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
