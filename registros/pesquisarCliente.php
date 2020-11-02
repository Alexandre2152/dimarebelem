<?php

include 'conectBD.php';

$pesquisa = $_POST['pesquisa'];

$sqlPesquisa = "SELECT * FROM clientes WHERE nome LIKE %$pesquisa% ";
