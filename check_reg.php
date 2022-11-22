<?php 
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['pass']));


if(mb_strlen($login) < 5 || mb_strlen($login)>90) 

{
	echo "Недопустимая длина логина";
	exit();
} else if (mb_strlen($pass) < 5 || mb_strlen($pass)>12)
{
	echo "Недопустимая длина пароля (от 5 до 12 символов)";
	exit();
}

require_once 'db.php'; 
$db->query("INSERT INTO `user` (`login`, `pass`) VALUES ('$login', '$pass')") ;

$db->close();

header('Location: index.php?page=registr');


 ?>