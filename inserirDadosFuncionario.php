<?php
if ($_POST['cxnomef'] != "") {
    include_once 'conexao.php';
    $nomeF = $_POST['cxnomef'];
    $fone = $_POST['cxfonef'];
    $email = $_POST['cxemailf'];
    $periodo = $_POST['cxperiodof'];
    $loginf = $_POST['cxloginf'];
    $senhaf = $_POST['cxsenhaf'];
    $perfil = $_POST['cxperfilf'];

    $sql = "insert into tbfuncionario (nome, fone, email, periodo, login, senha, perfil) 
	values ('$nomeF','$fone','$email','$periodo','$loginf','$senhaf', '$perfil')";
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