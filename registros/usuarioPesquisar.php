<?php

include 'conectBD.php';

$usuarios = $_POST['buscarUsuarios'];

$sqlPesquisa = mysqli_query($conn, "SELECT * FROM usuarios WHERE nome LIKE '%$usuarios%'") or die("Erro de conexão.");
while ($row = mysqli_fetch_assoc($sqlPesquisa)) { ?>
    <script>
        alert(`CÓDIGO: <?php echo $row['id_user']; ?> \n NOME: <?php echo $row['nome']; ?> \n E-MAIL: <?php echo $row['email']; ?> \nTELEFONE: <?php echo $row['telefone']; ?> \n SENHA: <?php echo $row['senha']; ?>`)
    </script>

<?php   }
?>