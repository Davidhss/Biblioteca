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
    $consultarlivro = "select * from tblivros";
    $executar = mysqli_query($mysqli, $consultar);
    $executarlivro = mysqli_query($mysqli, $consultarlivro);
   
    ?>
    <div id="listar">
        <?php
        while ($linha = mysqli_fetch_array($executar)) {
        ?>

            Nome Cliente:<input type="text" value="<?php echo $linha["nome"]; ?>" readonly>
            Número Cliente:<input type="text" value="<?php echo $linha["fone"]; ?>" readonly>
        <?php } ?>

        <?php
        while ($linha = mysqli_fetch_array($executarlivro)) {
        ?>
            Nome Livro:<input type="text" value="<?php echo $linha["nome"]; ?>" readonly>
            Código Livro:<input type="text" value="<?php echo $linha["codigol"]; ?>" readonly>
        
        <a href="devolucaoLivro.php?id=<?php echo $linha["codigol"]; ?>">Devolveu</a>
        <?php } ?>
        <br />



        <a href="telaDevolucao.php">Voltar</a>
    </div>

</body>

</html>