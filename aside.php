<?php require_once 'db.php';?>

	<aside id="rols">
		<div id="categor">
			Категории:
			<ul>


<?php 
$result = mysqli_query($db,"SELECT * FROM `category` where page_idpage = 5 ");
$row=mysqli_fetch_assoc($result);
 ?>
				<a href = "index.php?page=sushi"><li><?php echo $row["name"]; ?></li></a>
<?php 
$result = mysqli_query($db,"SELECT * FROM `category` where page_idpage = 3 ");
$row=mysqli_fetch_assoc($result);
 ?>
				<a href = "index.php?page=rol"><li><?php echo $row["name"]; ?></li></a>
<?php 
$result = mysqli_query($db,"SELECT * FROM `category` where page_idpage = 4 ");
$row=mysqli_fetch_assoc($result);
 ?>
				<a href = "index.php?page=sets"><li><?php echo $row["name"]; ?></li></a> 
<?php 
$result = mysqli_query($db,"SELECT * FROM `category` where page_idpage = 6 ");
$row=mysqli_fetch_assoc($result);
 ?>
				<a href = "index.php?page=zaprol"><li><?php echo $row["name"]; ?></li></a> 
<?php 
$result = mysqli_query($db,"SELECT * FROM `category` where page_idpage = 7 ");
$row=mysqli_fetch_assoc($result);
 ?>
				<a href = "index.php?page=deserts"><li><?php echo $row["name"]; ?></li></a> 
			</ul>
		</div>
	</aside>