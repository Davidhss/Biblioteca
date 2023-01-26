<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <h1>Biblioteca do Bolsolula</h1>
    <img src="img/bolsolula.jpg" id="img" alt="Bolsolula" width="200px">
    <form method="POST" action="verif.php">
        <div class="info">
            Login:<input type="text" name="cxlogin" autocomplete="off">
            <br>
            Senha:<input type="password" name="cxsenha" autocomplete="off">
            <br>
        </div>
        <div class="radios">
            <div class="rad">
                <input type="radio" name="cxfunc" value="adm" required> ADM
            </div>
            <div class="rad">
                <input type="radio" name="cxfunc" value="pad" required> Padrão
            </div>
        </div>
        <br><br>

            <div class="botaozinho">
                <input type="submit" class="btn" value="Entrar">
            </div>

    </form>

</body>

</html>