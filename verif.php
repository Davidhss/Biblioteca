<?php
session_start();

include_once 'conexao.php';

$login = $mysqli->real_escape_string($_POST['cxlogin']);
$senha = $mysqli->real_escape_string($_POST['cxsenha']);
$func = $mysqli->real_escape_string($_POST['cxfunc']);


$consultar = "SELECT * FROM tbfuncionario WHERE login = '$login' AND senha = '$senha' AND perfil = '$func'";

$sql_query = $mysqli->query($consultar) or die("Falha na execução do código SQL: " . $mysqli->error);

$quantidade = $sql_query->num_rows;

if ($quantidade == 1) {
    $_SESSION["perfil"] = $mysqli->real_escape_string($_POST['cxfunc']);

    header("Location: tmenuadm.php");
} else {
    echo "Falha ao logar! E-mail ou senha incorretos <br>";
    echo "<a href='index.php'>Voltar</a>";
}