<?php 
require_once 'db.php';
$idparagraph=$_GET['idparagraph'];
$page_idpage=$_GET['page_idpage'];
mysqli_query($db,"DELETE FROM text WHERE `text`.`idparagraph` = '$idparagraph' AND `text`.`page_idpage` = '$page_idpage'");



 header('Location: index.php?page=contacts');

 ?>
