<?php
$dbhost = "localhost";
$dbname = "web";
$username = "root";
$password = "admin";
$db = mysqli_connect($dbhost, $username, $password, $dbname);

if(mysqli_connect_errno())
{
	echo 'Ошибка в подключении к базе данных ('. mysqli_connect_errno().'): '.mysqli_connect_error();
	exit();
}
?>



