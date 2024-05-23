<?php
	session_start();
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/regstyle.css">
		<title>registration</title>
	</head>
	<body>
		<form action="inc/signup.php" method="post">
			<label>Логин*</label>
			<input type="text" name="login" placeholder="введите логин">
			<label>пароль*</label>
			<input type="password" name="password" placeholder="введите пароль">
			<label>повторите пароль*</label>
			<input type="password" name="repeat_password" placeholder="повторите пароль">
			<label>e-mail*</label>
			<input type="email" name="e-mail" placeholder="введите e-mail">
			<label>номер гаражного бокса*</label>
			<input type="text" name="box_number" placeholder="введите номер гаража">
			<label>ФИО*</label>
			<input type="text" name="full_name" placeholder="введите ФИО полностью">
			<button type="submit">зарегистрироваться</button>
			<p>у вас уже есть аккаунт? - <a href="regpage.php">выполнить вход</a></p>
			<p>* - поле обязательно для заполнения </p>
				<?php
					if ($_SESSION['message']) {
						echo '<p class="msg"> ' . $_SESSION['message'] .  ' </p>';
					}
					unset($_SESSION['message']);
				?>
			
		</form>
	</body>
</html>