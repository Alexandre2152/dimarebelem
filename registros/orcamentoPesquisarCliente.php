<?php

include 'conectBD.php';

$cliente = $_POST['buscarCliente'];

$sqlPesquisa = mysqli_query($conn, "SELECT * FROM clientes WHERE nome LIKE '%$cliente%'") or die("Erro de conexão.");
while ($row = mysqli_fetch_assoc($sqlPesquisa)) { ?>
    <script>
        alert(`CÓDIGO: <?php echo $row['id_clientes']; ?> \n NOME: <?php echo $row['nome']; ?> \n E-MAIL: <?php echo $row['email']; ?> \nTELEFONE: <?php echo $row['telefone']; ?> \n MENSAGEM: <?php echo $row['mensagem']; ?> \n Observação: <?php echo $row['obs']; ?> \n Situação: <?php echo $row['situacao']; ?>`)
    </script>

<?php   }
?>