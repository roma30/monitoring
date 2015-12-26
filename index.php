<?php require_once("templates/top.php");
if  ($_GET['url']){
$file=$_GET['url'];
}else{
$file='index';
}

$obj=new database();
$query= "select * from maintexts where url='$file'";
$obj->query($query);
$row=$obj-> single();

/*$query= "select * from maintexts where url='$file'";

$res=$db ->query($query);
echo "$query";
$row=$res ->fetch(PDO::FETCH_ASSOC); // не работает !!!!*/

/*$adr=mysql_query($query);
if (!$adr){
exit("erorr");
}
$text=mysql_fetch_array($adr); //формирует массив полей // $text ['name']*/
?>

<h2><?echo $row['name'];?></h2>
<?echo $row['body'];?>



<?php require_once("templates/bottom.php");?>