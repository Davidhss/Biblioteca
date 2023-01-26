<?php
if ($_POST['cxnomeL'] != "") {
    include_once 'conexao.php';
    $nomeL = $_POST['cxnomeL'];
    $genero = $_POST['cxgenero'];
    $autor = $_POST['cxautor'];
    $editora = $_POST['cxeditora'];
    $isbn = $_POST['cxisbn'];
    $pag = $_POST['cxpag'];

    $sql = "insert into tblivros (nome,genero,autor,editora,isbn,pag) 
	values ('$nomeL','$genero','$autor','$editora','$isbn','$pag')";
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