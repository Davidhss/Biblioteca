<html>

<head>
    <style>
        fieldset {
            width: 600px;
            margin: auto;
        }
    </style>
    <title>Cadastro de Dados</title>
</head>

<body>
<?php
    include_once 'conexao.php';
    $id = $_GET['id'];

    $consultar = "select * from tblivros where codigol = '$id'";
    $executar = mysqli_query($mysqli, $consultar);
    ?>
    <div id="listar">
        <?php
        while ($linha = mysqli_fetch_array($executar)) {
        ?>

            <form method="POST" action="alterarDadosLivro.php">
            <input type="hidden" name="codigol" value="<?php echo $linha['codigol']; ?>">
            Nome:<input type="text" name="cxnomeL" value="<?php echo $linha["nome"]; ?>">
            Gênero:<input type="text" name="cxgenero" value="<?php echo $linha["genero"]; ?>">
            Autor:<input type="text" name="cxautor" value="<?php echo $linha["autor"]; ?>">
            Editora:<input type="text" name="cxeditora" value="<?php echo $linha["editora"]; ?>">
            ISBN:<input type="text" name="cxisbn" value="<?php echo $linha["isbn"]; ?>">
            Páginas:<input type="text" name="cxpag" value="<?php echo $linha["pag"]; ?>">
            <input type="submit" value="Alterar">
            </form>
        <?php } ?>

        <a href="telacadlivro.php">Voltar</a>
    </div>

</body>

</html>