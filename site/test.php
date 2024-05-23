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
		<form action method="post">
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
		</form>
	</body>
</html>

<?php

$link = mysqli_connect('localhost', 'root', 'Gfhjkm', 'site');

    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }


    $login = $_POST['login'];
    $password = crypt($_POST['password']);
    $repeat_password = $_POST['repeat_password'];
    $email = $_POST['e-mail'];
    $box_number = $_POST['box_number'];
    $full_name = $_POST['full_name'];
    
    mysqli_query($link, "INSERT INTO users (`id`, `login`, `password`, `repeat_password`, `e-mail`, `box_number`, `full_name`) 
    VALUES (NULL, '$login', '$password', '$repeat_password', '$email', '$box_number', '$full_name')");
    //if($link->query($mysqli_query)){
       // echo "Данные успешно добавлены";
   // } else{
        //echo "Ошибка: " . $link->error;
   // }
    $link->close();
?>