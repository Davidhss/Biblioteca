<?php
    include_once 'conexao.php';
	$id = $_POST['codigoc'];
    $devolucao = $_POST['cxdevo'];
    $cod_clie = $_POST['cxclie'];
    $cod_livro = $_POST['cxcodlivro'];

    $alterar = "UPDATE tbcomanda SET 
	datadevolucao = '$devolucao', 
	codigocliente = '$cod_clie',
    codigolivro = '$cod_livro' 

	WHERE codigoc = '$id'";
	$executar = mysqli_query($mysqli,$alterar);
	if($executar)
	{
		echo "Dados alterado com sucesso";
		echo "<br>";
		echo "<a href='listarDadosComanda.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
    ?>