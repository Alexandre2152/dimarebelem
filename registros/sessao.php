<?php

//INICIO DA SESSÃO
session_start();

//Conexão ao banco
include "conectBD.php";

//Variasves que vem da página de login e senha
$nome = $_POST['usuario'];
$senha = $_POST['senha'];

//pesquisa na tabela de usuários
$sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE nome='$nome' AND senha='$senha' ") or die("Erro de conexão.");

// while ($row = mysqli_fetch_assoc($sql)) {
// }

if (mysqli_num_rows($sql) <= 0) {
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    header('location:../administrative/menu_adm/index.php');
} else {
    $_SESSION['nome'] = $nome;
    $_SESSION['senha'] = $senha;
    header('location:../administrative/menu_adm/pgAdmin.php');
}
