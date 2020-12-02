<?php

include "conectBD.php";

$id = $_POST['codigo'];

$sql = "DELETE FROM clientes WHERE id_clientes = $id ";


if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Cliente removido da base de dados com sucesso, atualize a página para concluir!')</script>";
    die();
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
