
<!DOCTYPE html>
<html>
	<head>
		<?php require_once 'db.php'; ?>
		<title>НалинаСуши</title>
		<link rel = "stylesheet" type = "text/css" href = "style/mystyle.css">
	</head>
	<body bgcolor="#fff5ff">
			<header>
<?php 
$result = mysqli_query($db,"SELECT * FROM `page` where idpage = 8 ");
$page=mysqli_fetch_assoc($result);

echo $page["heading"];
 ?>
		</header>