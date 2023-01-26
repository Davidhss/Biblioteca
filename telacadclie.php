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
    <form action="inserirDadosCliente.php" method="post">
        Nome:<input type="text" name="cxnomec" required>
        <br><br>
        CPF: <input type="text" name="cxcpfc" required>
        <br><br>
        Telefone:<input type="tel" name="cxfonec" required>
        <br><br>
        Email:<input type="email" name="cxemailc" required>
        <br><br>
        Data de Nascimento:<input type="date" name="cxdatac" required>
        <br><br>
        Idade:<input type="text" name="cxidadec" required>
        <br><br>
        Endereço:<input type="text" name="cxenderecoc" required>
        <br><br>
        <br><br>
        <input type="submit">
    </form>
</body>

</html>