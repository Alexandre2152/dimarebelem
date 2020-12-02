<?php

function addUsuario()
{
    include "conectBD.php";

    $id = '';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];
    $msm = $_POST['mensagem'];

    $sql = "INSERT INTO clientes (id_clientes, nome, email, telefone, mensagem) value (DEFAULT,'$nome', '$email', '$tel', '$msm') ";


    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Seu orçamento ja foi enviado, aguarde que retornaremos por email ou celular!'); window.location.href='../index.php';</script>";
        die();
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
