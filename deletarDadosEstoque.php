<?php

	include_once 'conexao.php';
	$id = $_GET['id'];
	
	$excluir = "delete from tbestoque where codigoe='$id' ";
	$executar = mysqli_query($mysqli,$excluir);
	if($executar)
	{
		echo "Estoque excluido com sucesso";
		echo "<br>";
		echo "<a href='listarDadosEstoque.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao excluir os dados";
	}
