<link rel="stylesheet" href="css/menu.css">

<?php
session_start();
$perfil = $_SESSION['perfil'];

if ($perfil == 'adm') {
    echo "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Menu ADM</title>
    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>

    <h1>
    ADM TA ON
    </h1>

    <div class='menu'>     
        <a class='button' href='telacadfunc.php'>Cadastro Funcionário</a>
       
        <a class='button' href='telacadclie.php'>Cadastrar Clientes</a>

        <a class='button' href='telacadlivro.php'>Cadastrar Livros</a>

        <a class='button' href='telaestoque.php'>Cadastrar Estoque</a>

        <a class='button' href='telacomanda.php'>Cadastrar Comanda</a>

        <a class='button' href='listarDadosFunc.php'>Exibir Funcionários</a>

        <a class='button' href='listarDadosClie.php'>Exibir Clientes</a>

        <a class='button' href='listarDadosLivro.php'>Exibir Livros</a>

        <a class='button' href='listarDadosEstoque.php'>Exibir Estoque</a>

        <a class='button' href='listarDadosComanda.php'>Exibir Comanda</a>

        <a class='button' id='sair' href='sair.php'>Sair</a>
    </div>
    

        <div id='multa'>
            <h2>DADOS DA MULTA</h2>
            <p>1 A 10 DIAS - R$5,00</p>
            <p>20 A 30 DIAS - R$15,00</p>
            <p>MAIS DE UM MÊS - R$35,00 - Acréscimo por mês</p>
        </div>

</body>

</html>
";
} else if ($perfil == 'pad') {
    echo "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Menu ADM</title>
    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
<h1>
FUNCIONARIO TA ON
</h1>

<div class='menu'>      
    <a class='button' href='telacadclie.php'>Cadastrar Clientes</a>

    <a class='button' href='telacadlivro.php'>Cadastrar Livros</a>

    <a class='button' href='telaestoque.php'>Cadastrar Estoque</a>

    <a class='button' href='telacomanda.php'>Cadastrar Comanda</a>

    <a class='button' href='listarDadosFunc.php'>Exibir Funcionários</a>

    <a class='button' href='listarDadosClie.php'>Exibir Clientes</a>

    <a class='button' href='listarDadosLivro.php'>Exibir Livros</a>

    <a class='button' href='listarDadosEstoque.php'>Exibir Estoque</a>

    <a class='button' href='listarDadosComanda.php'>Exibir Comanda</a>

    <a class='button' id='sair' href='sair.php'>Sair</a>
</div>


    <div id='multa'>
        <h2>DADOS DA MULTA</h2>
        <p>1 A 10 DIAS - R$5,00</p>
        <p>20 A 30 DIAS - R$15,00</p>
        <p>MAIS DE UM MÊS - R$35,00 - Acréscimo por mês</p>
    </div>

</body>

</html>
";
} else {
    echo "
        <script>
            alert('Tente outra vez');
            document.location.href = 'index.php';
        </script>
     ";
}