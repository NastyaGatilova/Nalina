<?php require_once 'db.php'; ?>

<?php 

// $result = mysqli_query($db,"SELECT * FROM `menu`");

// while($menu=mysqli_fetch_assoc($result))
// {
// 	echo $menu["menu_item"];
// 	echo "<br>";
// }

 ?>




<?php include("conf.php");?>

	<?php include("head.php"); ?>
		
			<?php include("nav.php");
			
			if ($CURRENT_PAGE == "index")include_once $router["main"]; 
			else include_once $router[$CURRENT_PAGE]; ?>

			<?php include("footer.php"); ?>
	