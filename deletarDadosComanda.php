<?php

	include_once 'conexao.php';
	$id = $_GET['id'];
	
	$excluir = "delete from tbcomanda where codigoc='$id' ";
	$executar = mysqli_query($mysqli,$excluir);
	if($executar)
	{
		echo "Comanda excluida com sucesso";
		echo "<br>";
		echo "<a href='listarDadosComanda.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao excluir os dados";
	}
