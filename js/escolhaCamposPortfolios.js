const camposEscolhido = document.querySelector('div#campoSlide')

function escolhaCamposPortfolio(op){
    switch(op){
        case 'dormitorio':
            camposEscolhido.innerHTML=`
            <div class="container-md mx-auto pt-3">

            <div id="slideimagensPortfolio" class="carousel slide p-1 border border-danger rounded shadow-sm" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/dormitorios/dormitorio_04.jpg" title="" id="imagemSlide">
                    </div>
        
                    <div class="carousel-item">
                        <img src="assets/dormitorios/dormitorio_08.jpg" title="" id="imagemSlide">
                    </div>
        
                    <div class="carousel-item">
                        <img src="assets/dormitorios/dormitorio_12.jpg" title="" id="imagemSlide">
                    </div>
                </div>
        
                <a class="carousel-control-next" href="#slideimagensPortfolio" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        
                <a class="carousel-control-prev" href="#slideimagensPortfolio" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Prev</span>
                </a>
        
            </div>
            </div>
`        
        break

        case 'cozinha':
            camposEscolhido.innerHTML=`
            <div class="container-md mx-auto pt-3">

            <div id="slideimagensPortfolio" class="carousel slide  p-1 border border-danger rounded shadow-sm" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/cozinha/cozinha_06.jpg" title="" id="imagemSlide">
                    </div>
        
                    <div class="carousel-item">
                        <img src="assets/cozinha/cozinha_12.jpg" title="" id="imagemSlide">
                    </div>
        
                    <div class="carousel-item">
                        <img src="assets/cozinha/cozinha_18.jpg" title="" id="imagemSlide">
                    </div>
                </div>
        
                <a class="carousel-control-next" href="#slideimagensPortfolio" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        
                <a class="carousel-control-prev" href="#slideimagensPortfolio" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Prev</span>
                </a>
        
            </div>
            </div>
`        
        break

        case 'homeTheater':
            camposEscolhido.innerHTML=`
            <div class="container-md mx-auto pt-3">

            <div id="slideimagensPortfolio" class="carousel slide  p-1 border border-danger rounded shadow-sm" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/home_theater/home_theater_04.jpg" title="" id="imagemSlide">
                    </div>
        
                    <div class="carousel-item">
                        <img src="assets/home_theater/home_theater_08.jpg" title="" id="imagemSlide">
                    </div>
        
                    <div class="carousel-item">
                        <img src="assets/home_theater/home_theater_11.jpg" title="" id="imagemSlide">
                    </div>
                </div>
        
                <a class="carousel-control-next" href="#slideimagensPortfolio" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        
                <a class="carousel-control-prev" href="#slideimagensPortfolio" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Prev</span>
                </a>
        
            </div>
            </div>
`        
        break

        case 'banheiro':
            camposEscolhido.innerHTML=`
            <div class="container-md mx-auto pt-3">

            <div id="slideimagensPortfolio" class="carousel slide p-1 border border-danger rounded shadow-sm" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/banheiro/banheiro_02.jpg" title="" id="imagemSlide">
                    </div>
        
                    <div class="carousel-item">
                        <img src="assets/banheiro/banheiro_04.jpg" title="" id="imagemSlide">
                    </div>
        
                    <div class="carousel-item">
                        <img src="assets/banheiro/banheiro_06.jpg" title="" id="imagemSlide">
                    </div>
                </div>
        
                <a class="carousel-control-next" href="#slideimagensPortfolio" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        
                <a class="carousel-control-prev" href="#slideimagensPortfolio" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Prev</span>
                </a>
        
            </div>
            </div>
`        
        break
    }
}
