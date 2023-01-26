<?php
    include_once 'conexao.php';
    $id = $_GET['id'];
    $consultarcomanda = "select * from tbcomanda where codigolivro = '$id'";
    $executarcomanda = mysqli_query($mysqli, $consultarcomanda);

    while ($linha = mysqli_fetch_array($executarcomanda)) {
        $comanda = $linha["codigocliente"];
    }
	
    

    $sql = "delete from tbcomanda where codigocliente = '$comanda'";
    $query = mysqli_query($mysqli, $sql);

    $sql2 = "UPDATE tbestoque 
    SET
    qtdeAtual = qtdeAtual + 1
    where
    codigolivro = $id ";
    $query = mysqli_query($mysqli, $sql2);
    echo "
		<script>
		alert('Dados cadastrado com sucesso');
		</script>
		";
?>
<a href="tmenuadm.php">Voltar</a>