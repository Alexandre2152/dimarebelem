const rotas = document.getElementById('body#corpoSite')

function rotasPaginasMenu(pagina){
    switch(pagina){
        case 'sobre_nos':
            rotas.innerHTML=`
                <h1>Teste para troca de página!</h1>

            `
        break
    }
}