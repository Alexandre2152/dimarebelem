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

    <!-- Botões de busca -->
    <div class="row">
        <!-- Adicionar cliente -->
        <div class="col-2">
            <button class="btn btn-sm btn-danger my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#adicionarCliente">Adicionar Cliente</button>
        </div>

        <!-- Remover cliente -->
        <div class="col-2">
            <button class="btn btn-sm btn-danger my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#removerCliente">Remover Cliente</button>
        </div>

        <!-- Pesquisar cliente -->
        <div class="col">
            <iframe style="display: none;" name="pesquisarCliente"></iframe>
            <!-- O formulário recarrega etrata nesta mesma página as informações enviadas para "pesquisarCleinte.php" -->
            <form class="form-inline my-2 my-lg-0 justify-content-end" action="../../registros/orcamentoPesquisarCliente.php" method="POST" target="pesquisarCliente">
                <input class="form-control-sm mr-sm-2 border border-danger" type="search" name="buscarCliente" id="buscarCliente" placeholder="Nome do cliente..." aria-label="buscar">
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
                <th scope="col">Mensagem</th>
                <th scope="col">Obeservação</th>
                <th scope="col">Situação</th>
            </tr>

            <!-- Listagem do banco -->
            <?php
            while ($row = mysqli_fetch_assoc($sql)) {

                // consição para verificar sem o cliente enviou mensagem
                if ($row['mensagem'] == "") {
                    $row['mensagem'] = 'Sem mensagem!';
                }

                // Condição para inserir e atualuzar observações
                if ($row['obs'] == "") {
                    $row['obs'] =  "<button class='btn btn-sm btn-danger my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#observacao'>Adicionar</button>";
                } else {
                    $row['obs'] = $row['obs'] . "<br><button class='btn btn-sm btn-secondary my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#observacao'>Atualizar</button>";
                }

                // Condição para informar o estatus de atendimento
                switch ($row['situacao']) {
                    case "":
                        $row['situacao'] = "<button class='btn btn-sm btn-danger my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#situacao'>Novo</button>";
                        break;
                    case "Novo":
                        $row['situacao'] = "<button class='btn btn-sm btn-danger my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#situacao'>Novo</button>";
                        break;
                    case "Em_andamento":
                        $row['situacao'] = "<button class='btn btn-sm btn-warning my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#situacao'>Em andamento</button>";
                        break;
                    case "Finalizado":
                        $row['situacao'] = "<button class='btn btn-sm btn-success my-2 my-sm-0' type='submit' data-toggle='modal' data-target='#situacao'>Finalizado</button>";
                        break;
                }

            ?>
                <!-- Mostar na tela os resultados da busco no banco -->
                <tr>
                    <th scope="row" class="font-weight-bold text-center">
                        <h4><?php echo $row['id_clientes']; ?></h4>
                    </th>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['email']; ?> </td>
                    <td><?php echo $row['telefone']; ?> </td>
                    <td class="text-wrap"><?php echo $row['mensagem']; ?> </td>
                    <td class="text-wrap"><?php echo $row['obs']; ?> </td>
                    <td><?php echo $row['situacao']; ?> </td>
                </tr>
            <?php } ?>
        </table>
    </div>

<?php

}
?>

<!-- Modal para adicionar cliente -->
<div class="modal fade" id="adicionarCliente" tabindex="-1" aria-labelledby="adicionarClienteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adicionarClienteLabel">Preencha os dados do cliente.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- formulario -->
                <iframe style="display: none;" name="formOrcamento"></iframe>
                <form action="../../registros/orcamentoAddClienteAdmBD.php" method="POST" target="formOrcamento">
                    <div class="row-2">
                        <div class="col pb-2"><input type="text" name="nome" class="form-control border border-danger" placeholder="Nome" required style="background-color: #ffffff9a;"> </div>
                    </div>
                    <div class="row-2">
                        <div class="col pb-2"><input type="text" name="email" class="form-control border border-danger" placeholder="E-mail" required style="background-color: #ffffff9a;"> </div>
                        <div class="col pb-2"><input type="text" name="telefone" class="form-control border border-danger" placeholder="Whatsapp" required style="background-color: #ffffff9a;"> </div>
                    </div>


                    <div class="row-2">
                        <div class="col pb-2"><textarea type="textarea" name="mensagem" class="form-control border border-danger" placeholder="Mensagem..." row="2" style="background-color: #ffffff9a;"></textarea></div>
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
                <form action="../../registros/orcamentoDeletarClienteAdmBD.php" method="POST" target="formOrcamentoDel">
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

<!-- ---------------------------------------------------------------------------------------------------------------- -->
<!-- Modal para adiconar observação -->
<div class="modal fade" id="observacao" tabindex="-1" aria-labelledby="observacaoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="observacaoLabel">Observação.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- formulario -->
                <iframe style="display: none;" name="formOrcamentoObs"></iframe>
                <form action="../../registros/orcamentoAddObsClienteAdmBD.php" method="POST" target="formOrcamentoObs">
                    <div class="row">
                        <div class="col pb-2"><input type="text" name="codigo" class="form-control border border-danger" placeholder="Código do cliente" style="background-color: #ffffff9a;"> </div>
                    </div>
                    <div class="row">
                        <div class="col pb-2"><textarea type="textarea" name="observacao" class="form-control border border-danger" placeholder="Digitar observação..." row="2" style="background-color: #ffffff9a;"></textarea></div>
                    </div>
                    <div class="row">
                        <div class="col text-right"><input class="btn btn-danger" type="submit" value="ADICIONAR"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- ---------------------------------------------------------------------------------------------------------------- -->
<!-- Modal para atualizar o estatus de atendimento do cliente -->
<div class="modal fade" id="situacao" tabindex="-1" aria-labelledby="situacaoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="situacaoLabel">Informe o status de atendimento do cliente.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- formulario -->
                <iframe style="display: none;" name="formOrcamentoStatus"></iframe>
                <form action="../../registros/orcamentoStatusClienteAdmBD.php" method="POST" target="formOrcamentoStatus">
                    <div class="row">
                        <div class="col pb-2"><input type="text" name="codigo" class="form-control border border-danger" placeholder="Código do cliente" style="background-color: #ffffff9a;"> </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="Novo">
                        <label class="form-check-label" for="status1">
                            NOVO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="Em_andamento">
                        <label class="form-check-label" for="status2">
                            EM ANDAMENTO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="Finalizado">
                        <label class="form-check-label" for="status3">
                            FINALIZADO
                        </label>
                    </div>

                    <div class="row">
                        <div class="col text-right"><input class="btn btn-danger" type="submit" value="ALTERAR"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>