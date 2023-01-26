<?php

	include_once 'conexao.php';
	$id = $_GET['id'];
	
	$excluir = "delete from tblivros where codigol='$id' ";
	$executar = mysqli_query($mysqli,$excluir);
	if($executar)
	{
		echo "Livro excluido com sucesso";
		echo "<br>";
		echo "<a href='listarDadosLivro.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao excluir os dados";
	}
