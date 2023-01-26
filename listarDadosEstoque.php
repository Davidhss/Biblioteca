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
    $consultar = "select * from tbestoque";
    $executar = mysqli_query($mysqli, $consultar);
    ?>
    <div id="listar">
        <?php
        while ($linha = mysqli_fetch_array($executar)) {
        ?>

            Código do Livro:<input type="text" name="cxcodl" value="<?php echo $linha["codigolivro"]; ?>" readonly>
            Quantidade:<input type="text" name="cxqtdel" value="<?php echo $linha["qtde"]; ?>" readonly>
            Quantidade Atual:<input type="text" name="cxqtdeatual" value="<?php echo $linha["qtdeAtual"]; ?>" readonly>
            <a href="mostrarAlterarEstoque.php?id=<?php echo $linha["codigoe"]; ?>">Alterar</a>

            <a href="deletarDadosEstoque.php?id=<?php echo $linha["codigoe"]; ?>">Excluir</a>

            <br />

        <?php } ?>

        <a href="telaestoque.php">Voltar</a>
    </div>

</body>

</html>