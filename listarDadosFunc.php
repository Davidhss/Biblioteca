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
    $consultar = "select * from tbfuncionario";
    $executar = mysqli_query($mysqli, $consultar);
    ?>
    <div id="listar">
        <?php
        while ($linha = mysqli_fetch_array($executar)) {
        ?>

            Nome:<input type="text" value="<?php echo $linha["nome"]; ?>" readonly>
            Telefone:<input type="text" value="<?php echo $linha["fone"]; ?>" readonly>
            Email:<input type="text" value="<?php echo $linha["email"]; ?>" readonly>
            Período:<input type="text" value="<?php echo $linha["periodo"]; ?>" readonly>
            Login:<input type="text" value="<?php echo $linha["login"]; ?>" readonly>
            Perfil:<input type="text" value="<?php echo $linha["perfil"]; ?>" readonly>

            <a href="mostrarAlterarFunc.php?id=<?php echo $linha["codigof"]; ?>">Alterar</a>

            <a href="deletarDadosFunc.php?id=<?php echo $linha["codigof"]; ?>">Excluir</a>

            <br />

        <?php } ?>

        <a href="telacadfunc.php">Voltar</a>
    </div>

</body>

</html>