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
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 41');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=set1"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
				<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 42');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=set2"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 43');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=set3"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 44');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=set4"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 45');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=set5"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 46');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=set6"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 47');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=set7"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
			
				<div id="one-roll">
					<figure>
						<?php
						$result = mysqli_query($db, 'SELECT * FROM `picture` WHERE page_idpage = 48');
						$row = mysqli_fetch_array($result); ?>
						<?php foreach ($result as $row){ ?>
						<img src="<?php echo $row['file_path'] ?>" alt="<?php echo $row['name'] ?>" width="230" height="230">
						<figcaption>
							<a href = "index.php?page=set8"><?php echo $row['name']?></a> 
							<?php } ?>
						</figcaption>
					</figure>
				</div>
		 
			</article>
	</section>