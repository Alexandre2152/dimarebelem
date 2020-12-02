const rotas = document.getElementById('div#paginasAdministrativo')

function rotasAdministrativo(rotas){
    switch(rotas){
        case "orcamento":
            rotas.innerHTML = `<?php orcamentoConsulta(); ?>`
        break;

        case "usuarios":
            rotas.innerHTML = `<?php usuarioConsulta(); ?>`
        break;
    }
}