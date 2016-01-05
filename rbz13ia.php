<?php require_once('templates/top.php');
	require_once("config/config.php"); 
  	require_once ("class/Database.php"); 
	


$database = new Database();
$query="SELECT * FROM statias WHERE cat_god_id=1 and cat_mes_id=1";
$database->query($query);
$all = $database->resultset();
foreach($all as $one){
 echo "<div class='art'>".$one['name_categoria']."<br/>";
}
$database = new Database();
$query="SELECT * FROM prices";
$database->query($query);
$al = $database->resultset();
foreach($al as $two){
	 /*echo "<div class='art'>".$two['name']."<br/>";
	  echo "<div class='art'>".$two['vv0']."<br/>";
	   echo "<div class='art'>".$two['vv1']."<br/>";
	    echo "<div class='art'>".$two['vv2']."<br/>";
	     echo "<div class='art'>".$two['vv3']."<br/>";*/
echo "<table class='brd' width='100%'> 
<tr>
	<th>Название</th>
	<th>Описание</th>
	<th>Стоимость</th>
	<th>Категория</th>
	<th>Название</th>
	<th>Описание</th>
	<th>Стоимость</th>
	<th>Категория</th>
	<th>Название</th>
	<th>Описание</th>
	<th>Стоимость</th>
	<th>Категория</th>
	<th>Название</th>
	<th>Описание</th>
	<th>Стоимость</th>
	<th>Категория</th>
</tr> 
<tr>
	<td>тоже будет текст</td>
	<td>".$two['vv0']."</td>
	<td>".$two['vv1']."</td>
	<td>".$two['vv2']."</td>
	<td>".$two['vv3']."</td>
</tr> 
</table>";
	};
?>


<style type="text/css">
    table {
        border-collapse: collapse;
    }
    table th,
    table td {
        padding: 0 3px;
    }
    table.brd th,
    table.brd td {
        border: 1px solid #000;
    }
</style>