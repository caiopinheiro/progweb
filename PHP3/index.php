
<?php 
session_start();

if (!empty($_SESSION['start'])) { 
	header('Location: myfirstpage.php');
	exit();	
}

echo $_SESSION['start'];

?>
<!DOCTYPE html>

<html>
<head>
	<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Login</title>
</head>
<body class="body">
	<form id="form_login" action="verify_user.php" method="POST">
		<table class="cxtexto square curved padding">
			<tr>
				<td><label for="login">Login:</label></td>
				<td><input id="login" name="login" type="text" ></td>
			</tr>
			<tr>
				<td><label  for="senha">Senha:</label></td>
				<td><input type="password" id="senha" name="senha"></input></td>
			</tr>

			<tr>
				<td><input class="button" id="entrar" name="entrar" type="submit" value="Entrar"></td>
			</tr>

		</table>
	</form>

</body>
</html>