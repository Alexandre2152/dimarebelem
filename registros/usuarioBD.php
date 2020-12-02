<?php

function usuarioConsulta()
{

    include '../../registros/conectBD.php';
    $sql = mysqli_query($conn, "SELECT * FROM usuarios") or die("Erro de conexão.");

?>
    <!-- Titulo da página -->
    <div class="container text-center w-50">
        <p class="font-weight-bold text-uppercase border-bottom border-danger">Registro de usuários do sistema.</p>
    </div>

    <!-- Botões de busca -->
    <div class="row">
        <!-- Adicionar cliente -->
        <div class="col-2">
            <button class="btn btn-sm btn-danger my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#adicionarCliente">Adicionar Usuario</button>
        </div>

        <!-- Remover cliente -->
        <div class="col-2">
            <button class="btn btn-sm btn-danger my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#removerCliente">Remover Usuario</button>
        </div>

        <!-- Pesquisar cliente -->
        <div class="col">
            <iframe style="display: none;" name="pesquisarCliente"></iframe>
            <!-- O formulário recarrega etrata nesta mesma página as informações enviadas para "pesquisarCleinte.php" -->
            <form class="form-inline my-2 my-lg-0 justify-content-end" action="../../registros/usuarioPesquisar.php" method="POST" target="pesquisarCliente">
                <input class="form-control-sm mr-sm-2 border border-danger" type="search" name="buscarUsuarios" id="buscarCliente" placeholder="Nome do cliente..." aria-label="buscar">
                <button class="btn btn-sm btn-danger my-2 my-sm-0" type="submit">Pesquisar Cliente</button>
            </form>
        </div>

    </div>

    <!-- Tabela da consulta ao banco -->
    <div class="container table-sm table-responsive table-bordered rounded pre-scrollable" id="respostaBancoDados">
        <table class="table rounded">

            <tr class="table-danger">
                <th scope="col">CÓDIGO</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Senha</th>
            </tr>

            <!-- Listagem do banco -->
            <?php
            while ($row = mysqli_fetch_assoc($sql)) {

            ?>
                <!-- Mostar na tela os resultados da busco no banco -->
                <tr>
                    <th scope="row" class="font-weight-bold text-center">
                        <h4><?php echo $row['id_user']; ?></h4>
                    </th>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['email']; ?> </td>
                    <td><?php echo $row['telefone']; ?> </td>
                    <td class="text-wrap"><?php echo $row['senha']; ?> </td>
                </tr>
            <?php } ?>
        </table>
    </div>

<?php

}
?>

<!-- Modal para adicionar cliente -->
<div class="modal fade" id="adicionarCliente" tabindex="-1" aria-labelledby="adicionarUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adicionarUsuarioLabel">Preencha os dados do Usuario.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- formulario -->
                <iframe style="display: none;" name="formOrcamento"></iframe>
                <form action="../../registros/usuarioAddClienteAdmBD.php" method="POST" target="formOrcamento">
                    <div class="row-2">
                        <div class="col pb-2"><input type="text" name="nome" class="form-control border border-danger" placeholder="Nome" required style="background-color: #ffffff9a;"> </div>
                    </div>
                    <div class="row-2">
                        <div class="col pb-2"><input type="text" name="email" class="form-control border border-danger" placeholder="E-mail" required style="background-color: #ffffff9a;"> </div>
                        <div class="col pb-2"><input type="text" name="telefone" class="form-control border border-danger" placeholder="Whatsapp" required style="background-color: #ffffff9a;"> </div>
                        <div class="col pb-2"><input type="text" name="senha" class="form-control border border-danger" placeholder="Senha" required style="background-color: #ffffff9a;"> </div>
                    </div>
                    <div class="row">
                        <div class="col text-right"><input class="btn btn-danger" type="submit" value="SALVAR"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ---------------------------------------------------------------------------------------------------------------- -->
<!-- Modal para remover cliente -->
<div class="modal fade" id="removerCliente" tabindex="-1" aria-labelledby="removerClienteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="removerClienteLabel">Insira o código do cliente a ser removido.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- formulario -->
                <iframe style="display: none;" name="formOrcamentoDel"></iframe>
                <form action="../../registros/usuarioDeletarAdmBD.php" method="POST" target="formOrcamentoDel">
                    <div class="row">
                        <div class="col pb-2"><input type="text" name="codigo" class="form-control border border-danger" placeholder="Código do cliente" required style="background-color: #ffffff9a;"> </div>
                    </div>
                    <div class="row">
                        <div class="col text-right"><input class="btn btn-danger" type="submit" value="REMOVER"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>