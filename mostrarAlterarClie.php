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

    $consultar = "select * from tbcliente where codigocli = '$id'";
    $executar = mysqli_query($mysqli, $consultar);
    ?>
    <div id="listar">
        <?php
        while ($linha = mysqli_fetch_array($executar)) {
        ?>

            <form method="POST" action="alterarDadosClie.php">
            <input type="hidden" name="codigoc" value="<?php echo $linha['codigocli']; ?>">
            Nome:<input type="text" name="cxnomec" value="<?php echo $linha["nome"]; ?>">
            Idade:<input type="text" name="cxidadec" value="<?php echo $linha["idade"]; ?>">
            Endereço:<input type="text" name="cxenderecoc" value="<?php echo $linha["endereco"]; ?>">
            Data de Nascimento:<input type="text" name="datanasc" value="<?php echo $linha["datanasc"]; ?>">
            CPF:<input type="text" name="cxcpfc" value="<?php echo $linha["cpf"]; ?>">
            Telefone:<input type="text" name="cxfonec" value="<?php echo $linha["fone"]; ?>">
            Email:<input type="text" name="cxemailc" value="<?php echo $linha["email"]; ?>">
            <input type="submit" value="Alterar">
            </form>
        <?php } ?>

        <a href="telacadclie.php">Voltar</a>
    </div>

</body>

</html>