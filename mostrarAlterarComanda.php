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

    $consultar = "select * from tbcomanda where codigoc = '$id'";
    $executar = mysqli_query($mysqli, $consultar);
    ?>
    <div id="listar">
        <?php
        while ($linha = mysqli_fetch_array($executar)) {
        ?>

            <form method="POST" action="alterarDadosComanda.php">
            <input type="hidden" name="codigoc" value="<?php echo $linha['codigoc']; ?>">
            Data de Devolução:<input type="date" name="cxdevo" value="<?php echo $linha["datadevolucao"]; ?>">
            Código do Cliente:<input type="text" name="cxclie" value="<?php echo $linha["codigocliente"]; ?>">
            Código do Livro:<input type="text" name="cxcodlivro" value="<?php echo $linha["codigolivro"]; ?>">
            <input type="submit" value="Alterar">
            </form>
        <?php } ?>

        <a href="telacomanda.php">Voltar</a>
    </div>

</body>

</html>