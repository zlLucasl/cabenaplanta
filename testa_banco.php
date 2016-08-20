<?php
include("DAL/banco.php");

$bd = new Banco();
	if($bd->statusconexao())
		echo "conexao bem sucedida!";
	else
		echo "falha na conexao";
?>