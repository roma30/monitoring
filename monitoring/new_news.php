<?php require_once('templates/top.php');
?>
<?php

$database = new Database();
	$query="SELECT * FROM statias where user_id=".$_SESSION['id'];
	
	$database->query($query);
	$rows = $database->resultset();
	?>

	<table class='table table-bordered'>
	<tr>
	<th>фотографияя</th>
	<th>название</th>
	<th>действие</th>
	</tr>
	
<?php
		foreach ($rows as $key=>$value){
		if ($value['file_foto']){
		$pict="<img src= '/media/uploaded/".trim($value['user_id'])."/".trim($value['file_foto'])."' width='300px' /></a>";
		}
		else{
		$pict="<img src = '/media/uploaded/i.jpg' width='400px' /></a>";
		}?>
		
		<tr>
<td><?echo $pict?></td>
<td><?echo $value['name_categoria']?></td>
<td><a href ="#" class='btn btn-default btn-block dell' id='dell' data_url='news_dell.php?id=<?=$value['id'];?>'>удалить</a>
<a href="news_edit.php?id=<?=$value['id'];?>" class='btn btn-default btn-block'>редактировать</a>
<a href="#" class='btn btn-default btn-block'>скрыть</a>
</td>
</tr><?php
		}
		
	?>


</table>
	<?  require_once('templates/bottom.php');?>
	
	<script  type="text/javascript" src='media/js/cobinet.js'></script>