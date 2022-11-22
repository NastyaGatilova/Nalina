<article id = "text3">
<!-- <div align="center">
<h2>Авторизация</h2>
<form action="auth.php" method="post">
	 < id = "avtor"> 
	<input class="small_pole" type="text" name="login" placeholder='Введите логин'/>
	<br>
	<input class="small_pole" type="password" name="pwd" placeholder='Введите пароль'/>
	<br>
	<button class="subm" type="submit" name="button">Войти</button>
	 <br> 
	Ещё нет аккаунта?
	<br>
	<a href="index.php?page=registr">Зарегистрироваться</a>
</form>
</div> -->


<?php   
	if (isset($_COOKIE['user']) == '') :

?>

<!-- 	<h5>Рады Вас видеть <?= $_COOKIE['user']?> ! Чтобы выйти нажмите <a href="index.php?page=exit">здесь</a>.</h5> -->


<form action="index.php?page=auth" method="post">
  <div>
    <h1>Авторизация</h1>
   
    <hr>
<ul id="har">
	<li id ="har1">
    <label for="email"><b>Логин</b></label>
    <input type="email" placeholder="Введите логин" name="login" required>
	</li>
	
	<li id ="har1">
    <label for="pass"><b>Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="pass" required>
   </li>


    <hr>
    <button type="submit" class="subm">Войти</button>
  </div>

  <div>
    <p>Еще нет аккаунта? <a href="index.php?page=registr">Зарегистрироваться</a>.</p>
  </div>
</form>
</article>

<?php  else: ?>
		<h5>Рады Вас видеть <?= $_COOKIE['user']?> ! Чтобы выйти нажмите <a href="index.php?page=exit">здесь</a>.</h5>

<?php endif; ?>