<?php

include "conectBD.php";

$obs = $_POST['observacao'];
$id = $_POST['codigo'];

$sql = "UPDATE clientes SET obs='$obs' WHERE id_clientes = $id ";


if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Observação inserida com sucesso, atualize a página para concluir!')</script>";
    die();
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
