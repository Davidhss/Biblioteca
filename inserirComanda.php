<?php
if ($_POST['cxcodlivro'] != "") {
    include_once 'conexao.php';

    $devolucao = $_POST['cxdevo'];
    $cod_clie = $_POST['cxclie'];
    $cod_livro = $_POST['cxcodlivro'];

    $sql = "insert into tbcomanda (dataemprestimo,datadevolucao,codigocliente,codigolivro) 
	values (now(),'$devolucao','$cod_clie','$cod_livro')";
    $query = mysqli_query($mysqli, $sql);

    $sql2 = "UPDATE tbestoque 
    SET
    qtdeAtual = qtdeAtual - 1
    where
    codigolivro = $cod_livro ";
    $query = mysqli_query($mysqli, $sql2);
    echo "
		<script>
		alert('Dados cadastrado com sucesso');
		</script>
		";
} else {
    echo "Dados não cadastrado";
}

?>
<a href="tmenuadm.php">Voltar</a>