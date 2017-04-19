<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../views/admin/css/style.css">
	<link rel="stylesheet" href="../views/admin/css/bootstrap.min.css">
	<title>Вход в панель управления</title>
</head>
<body>
<div class="container">
	<div class="col-md-16" id="login">
 		<form method="POST" id="loginform">
 			<p>
 				<label for="user-login">Имя пользователя</label>
 				<input type="text" name="log" id="user-login" class="input" value="" size="20">
 			</p>
 			<p>
 				<label for="user-password">Пароль</label>
 				<input type="text" name="pass" id="user-password" class="input" value="" size="20">
 			</p>
 			<p class="forgetmenot">
 				<label for="rememberme" id="remember-p">
 					<input name="rememberme" type="checkbox" id="rememberme" value="forever">
 					Запомнить меня
 				</label>
 			</p>
 			<p class="submit">
 				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Войти">
 			</p>
 		</form>
	</div>
</div>
</body>
</html>


