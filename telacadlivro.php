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
    <form method="POST" action="inserirDadosLivro.php">
        Nome:<input type="text" name="cxnomeL" required>
        <br><br>
        Gênero: <input type="text" name="cxgenero" required>
        <br><br>
        Autor:<input type="text" name="cxautor" required>
        <br><br>
        Editora:<input type="text" name="cxeditora" required>
        <br><br>
        ISBN:<input type="text" name="cxisbn" required>
        <br><br>
        Páginas:<input type="number" name="cxpag" required>
        <br><br>
        <input type="submit">
    </form>
</body>

</html>