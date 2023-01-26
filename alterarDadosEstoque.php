<?php
    include_once 'conexao.php';
	$id = $_POST['codigoe'];
    $codL = $_POST['cxcodl'];
    $qtde = $_POST['cxqtdel'];
    $qtdeAtual = $_POST['cxqtdeatual'];

    $alterar = "UPDATE tbestoque SET 
	codigolivro = '$codL', 
	qtde = '$qtde',
    qtdeAtual = '$qtdeAtual' 
	WHERE codigoe = '$id'";
	$executar = mysqli_query($mysqli,$alterar);
	if($executar)
	{
		echo "Dados alterado com sucesso";
		echo "<br>";
		echo "<a href='listarDadosEstoque.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
    ?>