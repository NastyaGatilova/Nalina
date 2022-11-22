<?php
function get_category($db){
	$sql = "SELECT * FROM `category` where idcategory= 1";
	$result = mysql_query($db, $sql);
$category=mysql_fetch_all($result)
return $category;
}

$category = get_category($db);