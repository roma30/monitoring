<?php require_once("templates/top.php");
if  ($_GET['url']){
$file=$_GET['url'];
}else{
$file='index';
}
<<<<<<< HEAD

=======
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
$obj=new database();
$query= "select * from maintexts where url='$file'";
$obj->query($query);
$row=$obj-> single();

<<<<<<< HEAD
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
=======


//$text=mysql_fetch_array($adr); //формирует массив полей // $text ['name']
?>
<h2><?echo $row['name'];?></h2>
		<?echo $row['body'];?>

<?php require_once("templates/bottom.php");?>
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
