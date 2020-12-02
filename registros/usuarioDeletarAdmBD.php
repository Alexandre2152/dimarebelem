<?php

include "conectBD.php";

$id = $_POST['codigo'];

$sql = "DELETE FROM usuarios WHERE id_user = $id ";


if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Usuario removido da base de dados com sucesso, atualize a página para concluir!')</script>";
    die();
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
