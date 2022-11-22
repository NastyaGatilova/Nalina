<?php 
require_once 'db.php';
$q = $_GET['page'];
if ($q == '') $q = 'index';
if ($q == 'index') $q = 'main';
$q.='.php';
global $db;
$db = mysqli_connect($dbhost, $username, $password, $dbname);
$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 33');
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<section id="sush1">
	<p>	
		<?php  $result = mysqli_query($db, 'SELECT * FROM `dish` WHERE iddish = 7');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);?>
		<?php foreach ($result as $row){ ?>
		<h4 align="center"><?php echo  $row['name']; 
					} ?></h4>

				<?php  	$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 33');
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);?>
		<?php foreach ($result as $row){ ?>
		<img src="<?php echo $row['file_path'] ?>" width="350" height="350" 
	  	alt="<?php echo $row['name'] ?>" align="left" 
	  	vspace="10" hspace="25">
	  	<?php } ?>	
	  	<?php
	  	$result = mysqli_query($db, 'SELECT * FROM `dish` WHERE iddish = 7');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	  	foreach ($result as $row){ ?>
		<pre> <?php echo  $row['structure']; 
					} ?></pre>
		<?php foreach ($result as $row){ ?>
		<pre> <?php echo  $row['characteristic'];?></pre>
		<ul id="har">
		<li id ="har1">&nbsp;<?php echo  $row['protein'];?></li>
		<li id ="har1">&nbsp;<?php echo  $row['carb'];?></li>
		<li id ="har1">&nbsp;<?php echo  $row['fat'];?></li>
		<li id ="har1">&nbsp;<?php echo  $row['energy'];?></li>
		<li id ="har1">&nbsp;<?php echo  $row['weight'];?></li>
		<?php } ?>
		</ul>
	</p>
		<div align = "left"> <a href = "index.php?page=update&iddish=7&category_idcategory=2" >Редактировать</a></div>
	
		</section>