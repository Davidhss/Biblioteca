<?php
    include_once 'conexao.php';
    $id = $_POST['codigo'];
    $nomef = $_POST['cxnomef'];
    $fone = $_POST['cxfonef'];
    $email = $_POST['cxemailf'];
    $periodo = $_POST['cxperiodof'];
    $loginf = $_POST['cxloginf'];
    $perfil = $_POST['cxperfilf'];

    $alterar = "UPDATE tbfuncionario SET 
	nome = '$nomef', 
	fone = '$fone',
    email = '$email', 
	periodo = '$periodo',
    login = '$loginf', 
	perfil = '$perfil'
	WHERE codigof = '$id'";
	$executar = mysqli_query($mysqli,$alterar);
	if($executar)
	{
		echo "Dados alterado com sucesso";
		echo "<br>";
		echo "<a href='listarDadosFunc.php'>Voltar</a>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
    ?>