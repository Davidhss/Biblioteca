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

    $consultar = "select * from tbfuncionario where codigof = '$id'";
    $executar = mysqli_query($mysqli, $consultar);
    ?>
    <div id="listar">
        <?php
        while ($linha = mysqli_fetch_array($executar)) {
        ?>
            <form method="POST" action="alterarDadosFunc.php">
                <input type="hidden" name="codigo" value="<?php echo $linha['codigof']; ?>">
                Nome:<input type="text" name="cxnomef" value="<?php echo $linha["nome"]; ?>">
                Telefone:<input type="text" name="cxfonef" value="<?php echo $linha["fone"]; ?>">
                Email:<input type="text" name="cxemailf" value="<?php echo $linha["email"]; ?>">
                Período:<input type="text" name="cxperiodof" value="<?php echo $linha["periodo"]; ?>">
                Login:<input type="text" name="cxloginf" value="<?php echo $linha["login"]; ?>">
                Perfil:<input type="text" name="cxperfilf" value="<?php echo $linha["perfil"]; ?>">

                <input type="submit" value="Alterar">
            </form>

        <?php } ?>

        <a href="telacadfunc.php">Voltar</a>
    </div>

</body>

</html>