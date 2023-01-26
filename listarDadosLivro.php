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
    $consultar = "select * from tblivros";
    $executar = mysqli_query($mysqli, $consultar);
    ?>
    <div id="listar">
        <?php
        while ($linha = mysqli_fetch_array($executar)) {
        ?>

            Nome:<input type="text" value="<?php echo $linha["nome"]; ?>" readonly>
            Genero:<input type="text" value="<?php echo $linha["genero"]; ?>" readonly>
            Autor:<input type="text" value="<?php echo $linha["autor"]; ?>" readonly>
            Editora:<input type="text" value="<?php echo $linha["editora"]; ?>" readonly>
            ISBN:<input type="text" value="<?php echo $linha["isbn"]; ?>" readonly>
            Paginas:<input type="text" value="<?php echo $linha["pag"]; ?>" readonly>
            <a href="mostrarAlterarLivro.php?id=<?php echo $linha["codigol"]; ?>">Alterar</a>

            <a href="deletarDadosLivro.php?id=<?php echo $linha["codigol"]; ?>">Excluir</a>

            <br />

        <?php } ?>

        <a href="telacadlivro.php">Voltar</a>
    </div>

</body>

</html>