<?php require_once('templates/top.php');
?>
<?php
if ($_POST){

$database = new Database();
$query="SELECT * FROM forms WHERE login='".trim($_POST['login'])."' AND password='" .trim($_POST['password'])."'";

$database->query($query);

$row=$database-> single();
 
if ($row['id']){
echo  $row['id'];
$_SESSION['id']=$row['id'];
?>
<script>
	document.location.href='index.php?url=thankyoupage'
</script>
<?php
}else {
echo 'нету такого логина';
}

}

?>

<form method='POST' action="login.php">
  <div class="form-group">
    <label for="login">Введите ваш логин</label>
    <input type="login" class="form-control" id="login" placeholder="логин" name="login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Введите ваш пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="пароль" name="password">
  </div>
   
  <button type="submit" class="btn btn-default">Сохранить</button>
</form>


<?php require_once('templates/bottom.php');
?>