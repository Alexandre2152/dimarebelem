<?php

function orcamentoConsulta()
{

    include '../../registros/conectBD.php';
    $sql = mysqli_query($conn, "SELECT * FROM clientes") or die("Erro de conexão.");

?>
    <!-- Titulo da página -->
    <div class="container text-center w-50">
        <p class="font-weight-bold text-uppercase border-bottom border-danger">Registro de clientes para orçamento.</p>
    </div>

    <!-- Boõtes de busca -->
    <div>
        <form class="form-inline my-2 my-lg-0 justify-content-end">
            <input class="form-control-sm mr-sm-2" type="search" name="buscar" placeholder="Nome do cliente..." aria-label="buscar">
            <button class="btn btn-sm btn-danger my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </div>

    <!-- Tabela da consulta ao banco -->
    <div class="container table-sm table-responsive table-bordered rounded">
        <table class="table rounded">

            <tr class="table-danger">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Mensagem</th>
                <th scope="col">Obeservação</th>
                <th scope="col">Situação</th>
            </tr>

            <!-- Listagem do banco -->
            <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
                <tr>
                    <th scope="row"><?php echo $row['id_clientes']; ?> </th>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['email']; ?> </td>
                    <td><?php echo $row['telefone']; ?> </td>
                    <td class="text-wrap"><?php echo $row['mensagem']; ?> </td>
                    <td><?php echo $row['obs']; ?> </td>
                    <td><?php echo $row['situacao']; ?> </td>
                </tr>
            <?php } ?>
        </table>
    </div>

<?php } ?>