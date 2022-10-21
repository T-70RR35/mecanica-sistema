<?php
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "concessionaria";
$conexao = mysqli_connect($nome_servidor , $nome_usuario , $senha , $nome_banco);

if(mysqli_connect_error())
{
	echo("Problemas com a conexão de banco de dados".mysqli_connect_error());
}
?>