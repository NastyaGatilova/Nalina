	<?php require_once 'db.php';
	$q = $_GET['page'];
	if ($q == '') $q = 'index';
if ($q == 'index') $q = 'main';
$q.='.php';
global $db;
	 ?>
	

	<section>
		<?php include("aside.php"); ?>
		<article>
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 51');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=sush1"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 52');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=sush2"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 53');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=sush3"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 54');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=sush4"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
				
		</article>
	</section>