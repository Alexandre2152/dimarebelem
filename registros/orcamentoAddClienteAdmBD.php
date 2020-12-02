<?php

include "conectBD.php";

$id = '';
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$msm = $_POST['mensagem'];

$sql = "INSERT INTO clientes (id_clientes, nome, email, telefone, mensagem) value (DEFAULT,'$nome', '$email', '$tel', '$msm') ";


if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Orçamento salvo com sucesso, atualize a página para vizualizá-lo!')</script>";
    die();
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
