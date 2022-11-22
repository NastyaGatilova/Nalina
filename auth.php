<?php 
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['pass']));

require_once 'db.php'; 

$result = $db->query("SELECT * FROM `user` WHERE `login` = '$login' AND `pass`= '$pass' ");
$user = $result->fetch_assoc();
if (count((array)$user) == 0) 
{
	echo "Такой пользователь не найден";
	exit();
}

setcookie('user', $user['login'], time()+ 3600, "/");

$db->close();

header('Location: index.php?page=avtoriz');
 ?>