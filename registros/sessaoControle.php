<?php

ob_start();
session_start();

if ((!isset($_SESSION['nome']) == true) || (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    header('location:../menu_adm/index.php');
}

$logado = $_SESSION['nome'];
