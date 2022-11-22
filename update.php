<?php 
require_once 'db.php';
$row_iddish=$_GET['iddish'];
$row_category_idcategory=$_GET['category_idcategory'];
$result=mysqli_query($db, "SELECT * FROM `dish` WHERE iddish='$row_iddish'");
$result=mysqli_fetch_assoc($result);
// print_r($result);
 ?>

 <section  id="sush1">
			<h3 align="center">Редактирование блюда</h3>
			<form align="center" action="index.php?page=create_up" method="post">
				<input type="hidden" name="iddish" value="<?= $row_iddish ?>">
				<input type="hidden" name="category_idcategory" value="<?= $row_category_idcategory ?>">
				<br>
				<input class="small_pole" type="text" name="name" value="<?= $result['name']?>" />
				<br>
				<textarea class="small_pole" type="text" name="structure"  ><?= $result['structure']?></textarea>
				<br>
				<textarea class="small_pole" type="text" name="protein"  ><?= $result['protein']?></textarea>
				<br>
				<textarea class="small_pole" type="text" name="carb" ><?= $result['carb']?></textarea>
				<br>
				<textarea class="small_pole" type="text" name="fat"  ><?= $result['fat']?></textarea>
				<br>
				<textarea class="small_pole" type="text" name="energy" ><?= $result['energy']?></textarea>
				<br>
				<textarea class="small_pole" type="text" name="weight"  ><?= $result['weight']?></textarea>
				<br>
				<button class="subm" type="submit" name="button">Обновить</button>
			</form>
		</section>