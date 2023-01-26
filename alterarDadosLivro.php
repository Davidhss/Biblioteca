<?php
    include_once 'conexao.php';
	$id = $_POST['codigol'];
    $nomeL = $_POST['cxnomeL'];
    $genero = $_POST['cxgenero'];
    $autor = $_POST['cxautor'];
    $editora = $_POST['cxeditora'];
    $isbn = $_POST['cxisbn'];
    $pag = $_POST['cxpag'];


    $alterar = "UPDATE tblivros SET 
	nome = '$nomeL', 
	genero = '$genero',
    autor = '$autor', 
	editora = '$editora',
    isbn = '$isbn', 
	pag = '$pag'
	WHERE codigol = '$id'";
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