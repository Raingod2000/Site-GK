<?php
session_start();

require_once 'connect.php';
$login = $_POST['login'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
$email = $_POST['e-mail'];
$box_number = $_POST['box number'];
$full_name = $_POST['full name'];

if ($password === $repeat_password) {
	$_FILES['avatar']['name'];
	$path = '../uploads/' . time() . $_FILES['avatar']['name'];
	if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
		$_SESSION['message'] = 'ошибка при отправке сообщения';
		header('location: ../sdf.php');

		$password = md5($password);

		mysqli_query($connect, "INSERT INTO 'users' ('id', 'login', 'password', 'repeat_password', 'e-mail', 'box_number', 'full_name', 'avatar') 
		VALUES (NULL, '$login', '$password', '$repeat_password', '$email', '$box_number', '$full_name', '$path')");

if($link->query($sql)){
	echo "Данные успешно добавлены";
} else{
	echo "Ошибка: " . $link->error;
}

		$_SESSION['message'] = 'регистрация прошла успешно!';
		header('location: ../sdf.php');
		
	}
} 
else {
	$_SESSION['message'] = 'пароли не совпадают!';
	header('location: ../sdf.php');
}
$link->close();
?>
