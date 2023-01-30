<?php

require "../../includes/config.php";
session_start();
$adres = $_GET['city'].','.$_GET['street'].','.$_GET['home'].','.$_GET['kv'];

$zapros="UPDATE klient SET fio='".$_GET['fio']. "', adresklient='$adres' WHERE cardnumber='" .$_GET['cardnumber']. "'";

mysqli_query($connection, $zapros);

if (mysqli_affected_rows($connection)>0) {

echo 'Все сохранено. <a href="../klient.php"> Вернуться к списку пользователей </a>'; }

else { echo 'Ошибка сохранения. <a href="../klient.php"> Вернуться к списку пользователей</a> '; }

?>

