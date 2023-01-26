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
    $consultar = "select * from tbcomanda";
    $executar = mysqli_query($mysqli, $consultar);
    ?>
    <div id="listar">
        <?php
        while ($linha = mysqli_fetch_array($executar)) {
        ?>

            Data de Devolução:<input type="text" value="<?php echo $linha["datadevolucao"]; ?>" readonly>
            Código do Cliente:<input type="text" value="<?php echo $linha["codigocliente"]; ?>" readonly>
            Código do Livro:<input type="text" value="<?php echo $linha["codigolivro"]; ?>" readonly>
            <a href="mostrarAlterarComanda.php?id=<?php echo $linha["codigoc"]; ?>">Alterar</a>

            <a href="deletarDadosComanda.php?id=<?php echo $linha["codigoc"]; ?>">Excluir</a>

            <br />

        <?php } ?>

        <a href="telacomanda.php">Voltar</a>
    </div>

</body>

</html>