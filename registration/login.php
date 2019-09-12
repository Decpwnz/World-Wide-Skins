<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Strona Logowania</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Użytkownik</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Hasło</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Zalogować się</button>
  	</div>
  	<p>
  		Jeszcze nie jesteś członkiem? <a href="register.php">Rejestracja</a>
  	</p>
  </form>
</body>
</html>