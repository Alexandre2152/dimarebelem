<?php

include "conectBD.php";

$id = '';
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (id_user, nome, email, telefone, senha) value (DEFAULT,'$nome', '$email', '$tel', '$senha') ";


if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Usuario salvo com sucesso, atualize a página para vizualizá-lo!'); window.location.href='pgAdminUser.php';  </script>";
    die();
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
