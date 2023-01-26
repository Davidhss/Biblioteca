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

    $consultar = "select * from tbestoque where codigoe = '$id'";
    $executar = mysqli_query($mysqli, $consultar);
    ?>
    <div id="listar">
        <?php
        while ($linha = mysqli_fetch_array($executar)) {
        ?>

            <form method="POST" action="alterarDadosEstoque.php">
            <input type="hidden" name="codigoe" value="<?php echo $linha['codigoe']; ?>">
            Código do Livro:<input type="text" name="cxcodl" value="<?php echo $linha["codigolivro"]; ?>">
            Quantidade:<input type="text" name="cxqtdel" value="<?php echo $linha["qtde"]; ?>">
            Quantidade Atual:<input type="text" name="cxqtdeatual" value="<?php echo $linha["qtdeAtual"]; ?>">
            <input type="submit" value="Alterar">
            </form>
        <?php } ?>

        <a href="telaestoque.php">Voltar</a>
    </div>

</body>

</html>