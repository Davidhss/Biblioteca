<?php

	include_once 'conexao.php';
	$id = $_GET['id'];
	
	$excluir = "delete from tbfuncionario where codigof='$id' ";
	$executar = mysqli_query($mysqli,$excluir);
	if($executar)
	{
		echo "Cliente excluido com sucesso";
		echo "<br>";
		echo "<a href='listarDadosFunc.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao excluir os dados";
	}
