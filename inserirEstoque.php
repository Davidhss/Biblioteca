<?php
if ($_POST['cxcodl'] != "") {
    include_once 'conexao.php';
    $codL = $_POST['cxcodl'];
    $qtde = $_POST['cxqtdel'];
    $qtdeAtual = $_POST['cxqtdeatual'];

    $sql = "insert into tbestoque (codigolivro,qtde,qtdeAtual) 
	values ('$codL','$qtde','$qtdeAtual')";
    $query = mysqli_query($mysqli, $sql);
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