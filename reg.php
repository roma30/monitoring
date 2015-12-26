<?php require_once('templates/top.php');
?>
	
<?php 

 if ($_POST){
/* 	echo "<pre>";
	print_r($_POST);
	echo "</pre>"; */
<<<<<<< HEAD
 $err=array();
=======
	 $err=array();
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
	if(empty($_POST['email'])){
													$err[]= 'не указан email';
												}
		if(empty($_POST['login'])){
													$err[]= 'не указан login';
												}											
		if(empty($_POST['password'])){
													$err[]= 'не указан password';
												}
		if(empty($_POST['password_two'])){
													$err[]= 'не указан password_two';
												}	
		if(count($err)>0){
	echo "<pre>";
	print_r($err);
	echo "</pre>";	
<<<<<<< HEAD
}else{
=======
}else{										
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
$database = new Database();

$database->query('INSERT INTO forms (email, login, password, datareg, lastvisit) VALUES (:email, :login, :password, NOW(), NOW())');

<<<<<<< HEAD
$database->bind(':email', $_POST['email']);
$database->bind(':login', $_POST['login']);
$database->bind(':password', $_POST['password']);

$database->execute();

	?>
=======
$database->bind(':email', $_POST['login']);
$database->bind(':login', $_POST['email']);
$database->bind(':password', $_POST['password']);

$database->execute();
?>
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
<script>
	document.location.href='index.php?url=thankyoupage';
	</script>
<?php
<<<<<<< HEAD
} 
}
	?>
=======
}
}
?>
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529



<form method='POST' action="reg.php">
  <div class="form-group">
<<<<<<< HEAD
    <label for="login">Ввведите ваш логин</label>
    <input type="login" class="form-control" id="login" placeholder="логин" name="login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Введите ваш пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="пароль" name="password">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Повторить пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="пароль" name="password_two">
  </div>
    <div class="form-group">
    <label for="email">Введите ваш адрес электронной почты</label>
    <input type="email" class="form-control" id="email" placeholder="email" name="email">
  </div>
  <button type="submit" class="btn btn-default">Сохранить</button>
=======
    <label for="login">login</label>
    <input type="login" class="form-control" id="login" placeholder="login" name="login">
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="email" class="form-control" id="email" placeholder="email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">повторить Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_two">
  </div>
  

  <button type="submit" class="btn btn-default">Submit</button>
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
</form>



<?php require_once('templates/bottom.php');
?>