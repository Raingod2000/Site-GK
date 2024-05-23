
<?php 
require_once __DIR__.'/boot.php';
flash() ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/regstyle.css">
	
		<form action="do_login.php" method="post">
			<label for="login">Логин</label>
			<input type="text" id="login" name="login" placeholder="введите логин" >
			<label>пароль</label>
			<input type="password" id="password" name="password" placeholder="введите пароль">
			<button type="submit" name="vhod" id="vhod">войти</button>
			<p>
				
				у вас нет аккаунта? - <a href="test.php">регистрация</a>
			</p>
			<button><a href="index.php">на главную</a></button>
		</form>

		

