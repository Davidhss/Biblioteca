<?php

	include_once 'conexao.php';
	$id = $_GET['id'];
	
	$excluir = "delete from tbcliente where codigocli='$id' ";
	$executar = mysqli_query($mysqli,$excluir);
	if($executar)
	{
		echo "Cliente excluido com sucesso";
		echo "<br>";
		echo "<a href='listarDadosClie.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao excluir os dados";
	}
