<?php

$link = mysqli_connect('localhost', 'root', 'Gfhjkm', 'site');

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
?>