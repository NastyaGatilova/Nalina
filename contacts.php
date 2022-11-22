<?php
require_once 'db.php';  
$q = $_GET['page'];
if ($q == '') $q = 'index';
if ($q == 'index') $q = 'main';
$q.='.php';
global $db;

$result = mysqli_query($db, 'SELECT * FROM `text` WHERE page_idpage = 2');
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>
<section id="text3">

	<p><b><?php foreach ($result as $row){ ?>
						<p> <?php echo  $row['paragraph']; 
					}


	 ?></b></p>
	
			<?php
$result = mysqli_query($db, "SELECT * FROM `picture` WHERE page_idpage = 2");
		$row = mysqli_fetch_array($result);
							 foreach ($result as $row){ ?>
								<p><img src="<?php echo $row['file_path'] ?>" width="100"
								height="130" alt="<?php echo $row['name'] ?>"></p>
								<?php } ?>

								<div align = "left"> <a href = "index.php?page=edit&artname=new" >Добавить контакты</a></div>
								<div align = "left"> <a href = "index.php?page=delete&idparagraph=56&page_idpage=2" >Удалить контакты</a></div>

								


</section>