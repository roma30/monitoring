<?php session_start();?>
<?php require_once("config/config.php");?>
<?php require_once ("class/Database.php");?>
<<<<<<< HEAD
=======

>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<<<<<<< HEAD
<title> Мониторинг цен</title>
<meta name="description" content="мониторинг">
<meta name="keywords" content="мониторинг">
<meta name="outher" content="khaines@mail.ru">
<link type ="text/css " href="media/css/style.css" rel="stylesheet"/>
<link type ="text/css " href="media/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<script src="media/js/jquery-1.11.3.min.js"></script>
<script src="media/js/my.js"></script>
</head>

<body>
	<header  id="header">
		<img class="logo"  src="media/img/logo.png"/>
		<h1>Мониторинг цен по основным видам продукции</h1>
	</header>

	<nav class="topmenu">
		<ul class="menu">	
			<li><a href="index.php" >Главная</a></li>
			<li><a href="index.php?url=respbel">Республика Беларусь</a>
				<ul>
					<li><a href="#">Закупочные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Оптовые цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Розничные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
				</ul>
			</li>	
			<li><a href="index.php?url=rosfeder">Российская Федерация</a>
				<ul>
					<li><a href="#">Закупочные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Оптовые цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Розничные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
				</ul>
			</li>	
			<li><a href="index.php?url=kazah">Казахстан</a>
				<ul>
					<li><a href="#">Закупочные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Оптовые цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Розничные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="index.php?url=ykraina">Украина</a>
				<ul>
					<li><a href="#">Закупочные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Оптовые цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Розничные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="index.php?url=polsha">Польша</a>
				<ul>
					<li><a href="#">Закупочные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Оптовые цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Розничные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="index.php?url=litva">Литва</a>
				<ul>
					<li><a href="#">Закупочные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Оптовые цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
					<li><a href="#">Розничные цены</a>
						<ul>
						<li><a href="#">2013 год</a></li>
						<li><a href="#">2014 год</a></li>
						<li><a href="#">2015 год</a></li>	
						</ul>
					</li>
				</ul>
			</li>

			<li><a href="index.php?url=contact">Контактная информация</a></li>
		</ul>
	</nav>
<br>
<br>
=======
<title> Новости</title>
<meta name="description" content="Поехали">
<meta name="keywords" content=" ">
<meta name="outher" content="mikhalkevich@yo.ru">
<link type ="text/css " href="media/css/style.css" rel="stylesheet"/>
<link type ="text/css " href="media/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<body>


<header  id="header">
<img class="logo"  src="media/img/logo.png"/>
<h1>нОвОсТи</h1>

</header>
<nav class="topmenu">
<!--a href="index.php "> Главная</a-->
<a href="#" class="btn btn-success btn-block"> Спорт</a>
<a href="#" class="btn btn-success btn-block"> Здоровье</a>
<a href="#" class="btn btn-success btn-block"> Два</a>
<a href="#" class="btn btn-success btn-block"> Три</a>
<a href="#" class="btn btn-success btn-block"> Четыре</a>
<!--a href="index.php?url=contact"> Контакты</a-->
</nav>
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
<?php 
if ($_SESSION['id']){
?>
<div class="vih"><a href="logout.php" class="btn btn-success btn-block">выход</a></div>
<div class="cob"><a href="cobinet.php" class="btn btn-success btn-block">кабинет</a></div>
<<<<<<< HEAD
<div class="new"> <a href="new_news.php" class="btn btn-success btn-block">мои статьи</a></div>
=======
<<<<<<< HEAD
=======
<div class="new"> <a href="new_news.php" class="btn btn-success btn-block">мои статьи</a></div>
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
>>>>>>> 4d866e3013f605ade40a136b964915fc8539c4d7
<?php
} else{
?>
<div class="registr"> <a href="reg.php" class="btn btn-success btn-block">регистрация</a></div>
<div class="avtor"> <a href="login.php" class="btn btn-success btn-block">авторизация</a></div>
<?php
};
?>
<<<<<<< HEAD
<br>
<br>
<br>
<br>
<br>
<div class="content">
	<div class="col-md-3"><h2> Меню</h2> 
		<ul class="menu_two">		
			<li><a href="index.php?url=zakyp" class="btn btn-success btn-block">Закупочные цены</a>
				<ul>
					<li><a class="btn btn-success btn-block" href="#">2013 год</a></li>
					<li><a class="btn btn-success btn-block" href="#">2014 год</a></li>
					<li><a class="btn btn-success btn-block" href="#">2015 год</a></li>	
				</ul>
			</li>
			<li><a href="index.php?url=optov" class="btn btn-success btn-block">Оптовые цены</a>
				<ul>
					<li><a class="btn btn-success btn-block" href="#">2013 год</a></li>
					<li><a class="btn btn-success btn-block" href="#">2014 год</a></li>
					<li><a class="btn btn-success btn-block" href="#">2015 год</a></li>	
				</ul>
			</li>
			<li><a href="index.php?url=rozn" class="btn btn-success btn-block">Розничные цены</a>
				<ul>
					<li><a class="btn btn-success btn-block" href="#">2013 год</a></li>
					<li><a class="btn btn-success btn-block" href="#">2014 год</a></li>
					<li><a class="btn btn-success btn-block" href="#">2015 год</a></li>	
				</ul>
			</li>
		</ul>
=======
<!--div class="registr"> <a href="reg.php" class="btn btn-success btn-block">регистрация</a></div>
<div class="avtor"> <a href="login.php" class="btn btn-success btn-block">авторизация</a></div-->

<div class="content">
<div class="col-md-3"><h2> меню</h2> 
<!--a href="index.php?url=risynok" class="btn btn-success btn-block"> Раз</a-->
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529

<?php
$obj=new database();
$query="SELECT * FROM maintexts WHERE showhide='show'";
$obj->query($query);
$rows = $obj->resultset();
if ($_SESSION['id']){
echo $_SESSION['id'];
} else{?>
<div class="textt"> авторизация не прошла</div>
<?php
}

foreach($rows as $one){

<<<<<<< HEAD
/*?>
  <a href="index.php?url=<?=$one['url']?>" class="btn btn-success btn-block"> <?=$one['name']?></a> 
   <?php*/
=======

?>
  <a href="index.php?url=<?=$one['url']?>" class="btn btn-success btn-block"> <?=$one['name']?></a> 
   <?php
>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
}

// $obj=$res->query($query);
// while ($row=$res->fetch()){
  // 
// }
?>
<<<<<<< HEAD
	</div>


<div class="col-md-6">
=======
</div>


<div class="col-md-6">


>>>>>>> bd5b264d1efd8ae291280e47ef416041f829e529
