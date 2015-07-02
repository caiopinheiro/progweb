<?php 


$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$comentario = $_POST["comentario"];
$genero = array(1=>"Masculino",2=>"Feminino",3=>"Outros");

var_dump($nome) ;
var_dump($genero[$sexo]); 
var_dump($comentario);



?>