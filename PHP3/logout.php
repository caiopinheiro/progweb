<?php 
	session_start();
	if (!empty($_SESSION['start'])) {
		session_destroy();
	}
	header('Location: index.php');
 ?>