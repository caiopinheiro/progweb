<?php 
session_start();

if (!empty($_POST)) {
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	if ($login == "demo" && $senha == "demo") {
		
		if (!isset($_SESSION['start'])) {
			$_SESSION['start'] = date('H:i');
		}			
		header('Location: myfirstpage.php');
	}
	else{
		session_destroy();
		echo "Login ou senha invalida <br>";
		echo "Click <a href='index.php'>aqui</a> para voltar";
	}
}
else{
	if (!empty($_SESSION['start'])) {
 
		header('Location: myfirstpage.php');
		exit();
	}
	else{
		header('Location: index.php');
		exit();
	}
}


?>