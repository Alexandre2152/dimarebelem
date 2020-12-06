<?php



mysqli_set_charset($conn, 'utf8');

if (!$conn) {
    echo "Erro: Inpossível conectar com o banco. " . PHP_EOL;
    echo "Debugando errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugando error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// echo "Sucesso: Conectado com sucesso" . PHP_EOL . "<br>";
// echo "Infomação do host: " . mysqli_get_host_info($conn) . PHP_EOL;
