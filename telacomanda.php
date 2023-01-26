<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comanda</title>
</head>

<body>
    <button>
        <a href="tmenuadm.php">Menu</a>
    </button>
    <br><br>
    <form method="POST" action="inserirComanda.php">
        Data de Devolução:<input type="date" name="cxdevo" required>
        <br><br>
        Código do Cliente:<input type="number" name="cxclie" required>
        <br><br>
        Código do Livro:<input type="number" name="cxcodlivro" required>
        <br><br>
        <input type="submit">
        <a href="telaDevolucao.php">Devolveu</a>
    </form>
</body>