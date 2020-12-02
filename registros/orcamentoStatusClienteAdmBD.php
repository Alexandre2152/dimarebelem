<?php

include "conectBD.php";

$status = $_POST['status'];
$id = $_POST['codigo'];

$sql = "UPDATE clientes SET situacao = '$status' WHERE id_clientes = $id ";


if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Status atualizado com sucesso, atualize a página para concluir!')</script>";
    die();
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
