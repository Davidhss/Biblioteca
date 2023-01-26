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
    $consultar = "select * from tbcliente";
    $executar = mysqli_query($mysqli, $consultar);
    ?>
    <div id="listar">
        <?php
        while ($linha = mysqli_fetch_array($executar)) {
        ?>

            Nome:<input type="text" value="<?php echo $linha["nome"]; ?>" readonly>
            Idade:<input type="text" value="<?php echo $linha["idade"]; ?>" readonly>
            Endereço:<input type="text" value="<?php echo $linha["endereco"]; ?>" readonly>
            Data de Nascimento:<input type="text" value="<?php echo $linha["datanasc"]; ?>" readonly>
            CPF:<input type="text" value="<?php echo $linha["cpf"]; ?>" readonly>
            Telefone:<input type="text" value="<?php echo $linha["fone"]; ?>" readonly>
            Email:<input type="text" value="<?php echo $linha["email"]; ?>" readonly>
            <a href="mostrarAlterarClie.php?id=<?php echo $linha["codigocli"]; ?>">Alterar</a>

            <a href="deletarDadosClie.php?id=<?php echo $linha["codigocli"]; ?>">Excluir</a>

            <br />

        <?php } ?>

        <a href="telacadclie.php">Voltar</a>
    </div>

</body>

</html>