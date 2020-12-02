<?php

function rotasPaginas($valor)
{

    switch ($valor) {
        case 'orcamento':
            echo orcamentoConsulta();
            break;
    }
}
