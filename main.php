	<?php
require_once 'db.php'; 

$q = isset($_GET['page']);
if ($q == '') $q = 'index';
if ($q == 'index') $q = 'main';
$q.='.php';
global $db;

$result = mysqli_query($db, 'SELECT * FROM `text` WHERE page_idpage = 1');
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>


	<section>
<div id=text1><b>
<?php  echo  $row['paragraph'];?>

</b>








</div>


	
		<div id=text>
<?php  
			$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph = 2');
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);?>

			<b><?php  echo  $row['paragraph'];?></b>
			
			<ul type="circle">
<?php 				
$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph >1 and idparagraph < 7 ');
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);?>


<?php 
while ($row = mysqli_fetch_array($result))
{
?>
	<li><?php  echo  $row['paragraph'];?></li>
<?php  
}
?>
			
			</ul>	
		<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph =7');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>
			<b><?php  echo  $row['paragraph'];?></b>
		<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph =8');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>	
			<p> <?php  echo  $row['paragraph'];?></p>
		<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph =9');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>
			<b><?php  echo  $row['paragraph'];?></b>

					<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph > 8 and idparagraph < 13');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>


<?php 
while ($row = mysqli_fetch_array($result))
{
	?>
	<p><?php  echo  $row['paragraph'];?></p>
	<?php  
}
?>

						<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph = 13');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>
			<b><?php  echo  $row['paragraph'];?></b>


<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph > 12 and idparagraph < 16 ');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>

<?php 
while ($row = mysqli_fetch_array($result))
{
	?>
	<p><?php  echo  $row['paragraph'];?></p>
	<?php  
}
?>

<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph = 16 ');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>
						
			<b><?php  echo  $row['paragraph'];?></b>


<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph = 17 ');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>

			<p><?php  echo  $row['paragraph'];?></p>
				
<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph = 18 ');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>

			<b><?php  echo  $row['paragraph'];?></b>	

<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph = 19 ');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>

			<p><?php  echo  $row['paragraph'];?></p>
			<p><ul type="disc"> 

				<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph > 18 and idparagraph < 25 ');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>

<?php 
while ($row = mysqli_fetch_array($result))
{
?>
	<li><?php  echo  $row['paragraph'];?></li>
<?php  
}
?>
		</ul>
			</p>
							<?php 
		$result = mysqli_query($db, 'SELECT * FROM `text` WHERE idparagraph = 25 ');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>
			<p><?php  echo  $row['paragraph'];?></p>
		</div>
		
	</section>


	