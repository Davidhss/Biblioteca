<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button>
        <a href="tmenuadm.php">Menu</a>
    </button>
    <br><br>
    <form method="POST" action="inserirEstoque.php">
        Digite o Código do Livro:<input type="text" name="cxcodl" required>
        <br><br>
        Quantidade de Livro:<input type="text" name="cxqtdel" required>
        <br><br>
        Quantidade de Livro Atual:<input type="text" name="cxqtdeatual" required>
        <br><br>
        <input type="submit">
    </form>
</body>