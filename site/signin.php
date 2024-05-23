<?php

    session_start();
    $link = mysqli_connect('localhost', 'root', 'Gfhjkm', 'site');

    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }

    $login = $_POST['login'];
    $password = $_POST['password'];
?>