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
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 31');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=rol1"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
				<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 32');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=rol2"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 33');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=rol3"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
						<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 34');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=rol4"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>

				<div id="one-roll">
						<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 35');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=rol5"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
						<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 36');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=rol6"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 37');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=rol7"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
						<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 38');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=rol8"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
			</article>
	</section>