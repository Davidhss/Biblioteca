<?php
    include_once 'conexao.php';
	$id = $_POST['codigoc'];
    $nomeC = $_POST['cxnomec'];
    $cpf = $_POST['cxcpfc'];
    $fone = $_POST['cxfonec'];
    $email = $_POST['cxemailc'];
    $datanasc = $_POST['datanasc'];
    $idade = $_POST['cxidadec'];
    $end = $_POST['cxenderecoc'];

    $alterar = "UPDATE tbcliente SET 
	nome = '$nomeC', 
	idade = '$idade',
    endereco = '$end', 
	datanasc= '$datanasc',
    cpf = '$cpf', 
	fone = '$fone',
	email = '$email'
	WHERE codigocli = '$id'";
	$executar = mysqli_query($mysqli,$alterar);
	if($executar)
	{
		echo "Dados alterado com sucesso";
		echo "<br>";
		echo "<a href='listarDadosClie.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
    ?>