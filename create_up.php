<?php 

require  'db.php';
include
$name =$_POST['name'];
$structure =$_POST['structure'];
$protein =$_POST['protein'];
$carb =$_POST['carb'];
$fat =$_POST['fat'];
$energy =$_POST['energy'];
$weight =$_POST['weight'];
$iddish =$_POST['iddish'];
$category_idcategory=$_POST['category_idcategory'];



mysqli_query($db,"UPDATE `dish` SET `name` = '$name', `structure` = '$structure', `protein` = '$protein', `carb` = '$carb', `fat` = '$fat', `energy` = '$energy', `weight` = '$weight' WHERE `dish`.`iddish` = '$iddish' AND `dish`.`category_idcategory` = '$category_idcategory'");

if ($iddish==1){ header('Location: index.php?page=sush1');}
else if ($iddish==2){header('Location: index.php?page=sush2');}
else if ($iddish==3){header('Location: index.php?page=sush3');}
else if ($iddish==4){header('Location: index.php?page=sush4');}


else if ($iddish==5){header('Location: index.php?page=rol1');}
else if ($iddish==6){header('Location: index.php?page=rol2');}
else if ($iddish==7){header('Location: index.php?page=rol3');}
else if ($iddish==8){header('Location: index.php?page=rol4');}
else if ($iddish==9){header('Location: index.php?page=rol5');}
else if ($iddish==10){header('Location: index.php?page=rol6');}
else if ($iddish==11){header('Location: index.php?page=rol7');}
else if ($iddish==12){header('Location: index.php?page=rol8');}

else if ($iddish==13){header('Location: index.php?page=set1');}
else if ($iddish==14){header('Location: index.php?page=set2');}
else if ($iddish==15){header('Location: index.php?page=set3');}
else if ($iddish==16){header('Location: index.php?page=set4');}
else if ($iddish==17){header('Location: index.php?page=set5');}
else if ($iddish==18){header('Location: index.php?page=set6');}
else if ($iddish==19){header('Location: index.php?page=set7');}
else if ($iddish==20){header('Location: index.php?page=set8');}

else if ($iddish==21){header('Location: index.php?page=zaprol1');}
else if ($iddish==22){header('Location: index.php?page=zaprol2');}
else if ($iddish==23){header('Location: index.php?page=zaprol3');}
else if ($iddish==24){header('Location: index.php?page=zaprol4');}

else if ($iddish==25){header('Location: index.php?page=desert1');}
else if ($iddish==26){header('Location: index.php?page=desert2');}
else if ($iddish==27){header('Location: index.php?page=desert3');}
else if ($iddish==28){header('Location: index.php?page=desert4');}



?>






