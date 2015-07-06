<?php 

$conexao = @mysql_connect("localhost", "root", "<inserir senha do banco>"); //caso possua, inserir senha do banco de dados

if (!$conexao){
	die("<p>O servidor do banco está indisponível</p>");
} 

$banco = @mysql_select_db("progweb",$conexao);

if (!$banco){ 
	die("<p>Banco de Dados não disponível.</p>");
}


$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$comentario = $_POST["comentario"];
$genero = array(1=>"Masculino",2=>"Feminino",3=>"Outros");


$sql = "INSERT INTO cadastro (nome,sexo,comentario) VALUES('$nome','$genero[$sexo]','$comentario')";
 	


if(mysql_query ($sql, $conexao)){
	echo "<p>Tudo ocorreu bem, salvo com sucesso</p>";
}



?>