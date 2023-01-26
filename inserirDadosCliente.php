<?php
if ($_POST['cxnomec'] != "") {
    include_once 'conexao.php';
    $nomeC = $_POST['cxnomec'];
    $cpf = $_POST['cxcpfc'];
    $fone = $_POST['cxfonec'];
    $email = $_POST['cxemailc'];
    $datanasc = $_POST['cxdatac'];
    $idade = $_POST['cxidadec'];
    $end = $_POST['cxenderecoc'];

    $sql = "insert into tbcliente (nome, idade, endereco, datanasc, cpf, fone, email) 
	values ('$nomeC','$idade','$end','$datanasc','$cpf','$fone', '$email')";
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