<?php 

session_start();

if (empty($_SESSION['start'])) { 
	header('Location: index.php');
	exit();	
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Minha primeira página</title>
</head>
<body>
	<h1>Este é um grande cabeçalho</h1>
	<h2>E este aqui é um pequeno cabeçalho</h2>
	<p>Aqui eu coloquei um parágrafo com algum texto aleátório, e a seguir vou inserir um formulário dentro de uma tabela. Além disso, aqui vai um link: <a href="http://icomp.ufam.edu.br">http://icomp.ufam.edu.br</a>
	</p>

	<form id="form" action="script.php" method="POST">
		<table>
			<tr>
				<td><label for="nome">Seu nome:</label></td>
				<td><input id="nome" name="nome" type="text" ></td>
			</tr>
			<tr>
				<td><label for="sexo">Seu sexo:</label></td>
				<td>
					<select id="sexo" name="sexo">
						<option value="1" selected="">Masculino</option>
						<option value="2">Feminino</option>
						<option value="3">Outros</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label  for="comentario">Seus comentários:</label></td>
				<td><textarea id="comentario" name="comentario" rows="6" cols="50"></textarea></td>
			</tr>

			<tr>
				<td></td>
				<td><input id="submit" name="submit" type="submit" value="Enviar"></td>
			</tr>



		</table>

		<a href="logout.php">Logout</a>
	</form>

</body>
</html>