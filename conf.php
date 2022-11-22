<?php
	$router = [
		"index" => "index.php",
		"main" => "main.php",
		"contacts" => "contacts.php",
		"sush1" => "articles/sush1.php",
		"sush2" => "articles/sush2.php",
		"sush3" => "articles/sush3.php",
		"sush4" => "articles/sush4.php",
		"sushi" => "sushi.php",	
		"rol" => "rol.php",
		"rol1" => "articles/rol1.php",
		"rol2" => "articles/rol2.php",
		"rol3" => "articles/rol3.php",
		"rol4" => "articles/rol4.php",
		"rol5" => "articles/rol5.php",
		"rol6" => "articles/rol6.php",
		"rol7" => "articles/rol7.php",
		"rol8" => "articles/rol8.php",
		"sets" => "sets.php",
		"set1" => "articles/set1.php",
		"set2" => "articles/set2.php",
		"set3" => "articles/set3.php",
		"set4" => "articles/set4.php",
		"set5" => "articles/set5.php",
		"set6" => "articles/set6.php",
		"set7" => "articles/set7.php",
		"set8" => "articles/set8.php",
		"zaprol" => "zaprol.php",
		"zaprol1" => "articles/zaprol1.php",
		"zaprol2" => "articles/zaprol2.php",
		"zaprol3" => "articles/zaprol3.php",
		"zaprol4" => "articles/zaprol4.php",
		"deserts" => "deserts.php",
		"desert1" => "articles/desert1.php",
		"desert2" => "articles/desert2.php",
		"desert3" => "articles/desert3.php",
		"desert4" => "articles/desert4.php",
		"edit" => "edit.php",
		"create" => "create.php",
		"delete" => "delete.php",
		"update" => "update.php",
		"create_up" => "create_up.php",
		"avtoriz" => "avtoriz.php",
		"registr" => "registr.php",
		"exit" => "exit.php",
		"auth" => "auth.php",

		

	];
	

error_reporting(0);

	$page = $_GET["page"];
	


	if ($page == '')
		$page = 'index';
	
	$CURRENT_PAGE = $page;
?>