<?php session_start();?>
<?php require_once("config/config.php");?>
<?php require_once ("class/Database.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
<?php 
if ($_SESSION['id']){
?>
<div class="vih"><a href="logout.php" class="btn btn-success btn-block">выход</a></div>
<div class="cob"><a href="cobinet.php" class="btn btn-success btn-block">кабинет</a></div>
<div class="new"> <a href="new_news.php" class="btn btn-success btn-block">мои статьи</a></div>
<?php
} else{
?>
<div class="registr"> <a href="reg.php" class="btn btn-success btn-block">регистрация</a></div>
<div class="avtor"> <a href="login.php" class="btn btn-success btn-block">авторизация</a></div>
<?php
};
?>
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

/*?>
  <a href="index.php?url=<?=$one['url']?>" class="btn btn-success btn-block"> <?=$one['name']?></a> 
   <?php*/
}

// $obj=$res->query($query);
// while ($row=$res->fetch()){
  // 
// }
?>
	</div>


<div class="col-md-6">