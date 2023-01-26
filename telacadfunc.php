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
    <form method="POST" action="inserirDadosFuncionario.php">
        Nome:<input type="text" name="cxnomef" required>
        <br><br>
        Telefone:<input type="tel" name="cxfonef" required>
        <br><br>
        Email:<input type="email" name="cxemailf" required>
        <br><br>
        <input type="radio" name="cxperiodof" value="ma" required>Manhã
        <input type="radio" name="cxperiodof" value="ta" required>Tarde
        <br><br>
        Login:<input type="text" name="cxloginf" required>
        <br><br>
        Senha:<input type="password" name="cxsenhaf" required>
        <br><br>
        Perfil:
        <select name="cxperfilf">
            <option value="adm">ADM</option>
            <option value="pad">Padrão</option>
        </select>
        <br><br>
        <input type="submit">
    </form>
</body>

</html>