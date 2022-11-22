
<section id="text3">
	
	
		<div>
		<?php 
require_once 'db.php'; 

$paragraph =$_POST['paragraph'];

if(trim($paragraph) == ""){
echo "Вы не заполнили поле!"; ?>
<div align = "right"> <a class="nav_link" href = "index.php?page=edit&artname=new" > Попробовать снова</a> </div>
<?php 
}
else{
mysqli_query($db, "INSERT INTO `text` (`idparagraph`, `paragraph`, `page_idpage`) VALUES (56, '$paragraph', 2)");

 header('Location: index.php?page=contacts');
}
?>	

		</div>
	
</section>	






	
			
		

		