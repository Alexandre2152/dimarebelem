<?php

//menu principal 
function menu()
{
    //include 'routes/rotaspaginas.php';
?>
    <div style="z-index: 999;">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9D9D9C;">
            <a class="navbar-brand text-white font-weight-bold ml-5" href="">
                <!-- dimare belém -->
                <img src="assets/iconesMenu/dimare-logo.png" title="LOJAS DIMARE - BELÉM" width="170em">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav font-weight-bold text-uppercase mx-auto">
                    <a class="nav-link text-white" href="index_.php">Home</a>
                    <a class="nav-link text-white" href="sobre.php">Sobre nós</a>
                    <a class="nav-link text-white" href="ambientes.php">ambientes</a>
                    <a class="nav-link text-white" href="contato.php">contato</a>
                    <!--<a class="nav-link text-white" href="#">contato</a>-->
                </div>
            </div>

            <form class="form-inline my-3 my-sm-0">
                <a href="administrative/menu_adm/index.php" class="nav-link text-decoration-none text-white-50" target="target">Área Restrita</a>
            </form>
        </nav>
    </div>



<?php

};

//Slide principal
function slideCarrosel()
{
?>
    <div class="mx-auto">

        <div id="slideimagens" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/loja/loja21.jpeg" title=".::Dimare Belém::." id="imagemSlide">
                </div>

                <div class="carousel-item">
                    <img src="assets/loja/loja16.jpeg" title=".::Dimare Belém::." id="imagemSlide">
                </div>

                <div class="carousel-item">
                    <img src="assets/cozinha/cozinha_01.jpg" title=".::Dimare Belém::." id="imagemSlide">
                </div>

                <div class="carousel-item">
                    <img src="assets/home_theater/home_theater_11.jpg" title=".::Dimare Belém::." id="imagemSlide">
                </div>
            </div>

            <a class="carousel-control-next" href="#slideimagens" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <a class="carousel-control-prev" href="#slideimagens" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Prev</span>
            </a>

        </div>
    </div>


<?php
}

//menu do portfólio
function menuslidePotfolio()
{
?>
    <div class="container">
        <div class="row text-uppercase font-weight-bold text-center shadow-sm" style="margin-top: -2em;">
            <div class="btn pt-4 col rounded bg-white border" onclick="escolhaCamposPortfolio('dormitorio')">
                <!-- <p><img src="assets/iconesMenu/icon_quarto.svg" width="60px"></p> -->
                <p class=" text-decoration-none text-danger">dormitório</p>
            </div>
            <div class="btn pt-4 col rounded bg-white border-top border-bottom border-right" onclick="escolhaCamposPortfolio('cozinha')">
                <!-- <p><img src="assets/iconesMenu/icon_cozinha.svg" width="60px"></p> -->
                <p class=" text-decoration-none text-danger">cozinha</p>
            </div>
            <div class="btn pt-4 col rounded bg-white border-top border-bottom" onclick="escolhaCamposPortfolio('homeTheater')">
                <!-- <p><img src="assets/iconesMenu/icon_sala_de_estar.svg" width="60px"></p> -->
                <p class=" text-decoration-none text-danger">home theater</p>
            </div>
            <div class="btn pt-4 col rounded bg-white border" onclick="escolhaCamposPortfolio('banheiro')">
                <!-- <p><img src="assets/iconesMenu/banheiro_.svg" width="60px"></p> -->
                <p class=" text-decoration-none text-danger">banheiro</p>
            </div>
            <div class="btn pt-4 col rounded bg-white border">
                <a class="text-decoration-none" href="http://marelsacorporativos.com.br/" target="_blank">
                    <!-- <p><img src="assets/iconesMenu/icon_corporativo.svg" width="60px"></p> -->
                    <p class=" text-decoration-none text-danger">corporativo</p>
                </a>
            </div>
        </div>
    </div>

    <div id="campoSlide"></div>
<?php
}

//função para destacar os serviços de qualidade
function servicosDestaques()
{
?>
    <div class="container pt-4 text-center">
        <h3>
            <p class="text-uppercase font-weight-bold text-center text-secondary">serviços <strong class="badge-danger rounded text-white p-1">premium</strong></p>
        </h3>
        <h6>
            <p class="text-uppercase">dispomos de uma equipe altamente qualificada que irá ajudar você a tranforma o seu sonho em realidade!</p>
        </h6>
        <br><br>
        <div class="row">
            <div class="col border-danger border-right">
                <img src="assets/servicosPremium/designer.svg" width="100em">
                <p class="text-uppercase font-weight-bold text-danger">design</p>
                <p class="text-center pl-2 pr-2">
                    Beleza presente em cada detalhe, projeto e módulos. A Dimare alia toda a beleza e a praticidade do design para oferecer produtos que transformam ambientes.
                </p>
            </div>

            <div class="col border-danger border-right">
                <img src="assets/servicosPremium/qualidade.svg" width="100em">
                <p class="text-uppercase font-weight-bold text-danger">qualidade</p>
                <p class="text-center pl-2 pr-2">
                    Alta tecnologia, matéria-prima selecionada, profissionais altamente capacitados e cuidado total com os acabamentos são marcas registradas da Dimare.
                </p>
            </div>

            <div class="col border-danger border-right">
                <img src="assets/servicosPremium/frotaPropria.svg" width="100em">
                <p class="text-uppercase font-weight-bold text-danger">FROTA PRÓPRIA</p>
                <p class="text-center pl-2 pr-2">
                    Os produtos Dimare são distribuídos por meio de frota própria, o que garante uma entrega assertiva dos produtos.
                </p>
            </div>

            <div class="col border-danger">
                <img src="assets/servicosPremium/montagem.svg" width="100em">
                <p class="text-uppercase font-weight-bold text-danger">MONTAGEM</p>
                <p class="text-center pl-2 pr-2">
                    Montagem final realizada com cuidados redobrados, preservando o acabamento único e exclusivo dos móveis Dimare.
                </p>
            </div>
        </div>
    </div>
    <br><br>
<?php
}

//função para orçamento
function orcameto()
{
?>
    <div class="pl-2 pr-2 rounded shadow" style="z-index: 999999; position: absolute; background-color: #9d9d9c65;">
        <h3>
            <p class="text-uppercase font-weight-bold text-center text-dark">
                <h4 class="text-center text-uppercase font-weight-bold text-dark border-bottom border-danger">Solicite seu orçamento</h4>
            </p>
        </h3>
        <!-- <h6>
            <p class="text-uppercase text-center">Aproveite nossas promoções e solicite seu orçamento sem compromisso.</p>
        </h6> -->

        <iframe style="display: none;" name="formOrcamento"></iframe>
        <form action="registros/addClienteBD.php" method="POST" target="formOrcamento">
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
                <div class="col text-right"><input class="btn btn-danger" type="submit" value="SOLICITAR ORÇAMENTO"></div>
            </div>
        </form>
        <br>
    </div>

<?php
}

// campo de orçamento, desativado.
// function orcameto()
// {
// 
?>
<!-- <br>
    <h3>
        <p class="text-uppercase font-weight-bold text-center text-dark">Solicite seu <strong class="badge-danger rounded text-white p-1">orçamento</strong></p>
    </h3>
    <h6>
        <p class="text-uppercase text-center">Aproveite nossas promoções e solicite seu orçamento sem compromisso.</p>
    </h6>
    <br>
    <iframe style="display: none;" name="formOrcamento"></iframe>
    <form action="registros/addClienteBD.php" method="POST" target="formOrcamento">
        <div class="row">
            <div class="col pb-2"><input type="text" name="nome" class="form-control is-invalid" placeholder="Digite seu nome..."></div>
            <div class="col pb-2"><input type="text" name="email" class="form-control is-invalid" placeholder="Digite seu melhor e-mail..."></div>
            <div class="col pb-2"><input type="text" name="telefone" class="form-control is-invalid" placeholder="Digite seu whatsapp..."></div>
        </div>
        <div class="row">
            <div class="col pb-2"><textarea type="textarea" name="mensagem" class="form-control is-invalid" placeholder="Mensagem..." row="3"></textarea></div>
        </div>
        <div class="row">
            <div class="col text-right"><input class="btn btn-danger" type="submit" value="SOLICITAR SORÇAMENTO"></div>
        </div>
    </form>
    <br><br> -->
<?php
// }


//função para exibir o campo contato
function contato()
{
?>
    <br>
    <h3>
        <p class="text-uppercase font-weight-bold text-center text-dark">entre em <strong class="badge-danger rounded text-white p-1">contato</strong></p>
    </h3>
    <h6>
        <p class="text-uppercase text-center">Estamos aguardando por você</p>
    </h6>
    <br>
    <div class="row">
        <div class="col pb-2">
            <p class="w-75">Av. Gov. José Malcher, nº 716. Loja A e B. Bairro Nazaré. CEP: 66060232. Belém-Pará</p>
            <p>(91) 98115-7496</p>
            <p>
                <a class="text-decoration-none text-danger" href="https://api.whatsapp.com/send?phone=5591981157496&text=Ol%C3%A1%20sou%20a%20vendedora%20Tatiane%20%C3%A9%20um%20prazer%20lhe%20atender!%20Logo%20responderei.">
                    Atendimento por <strong class="text-uppercase">whatsapp</strong>
                    <img src="assets/redesSociais/whatsapp.svg" width="25em" title="Whatsapp">
                </a>
            </p>
            <br>
            <!--https://m.uber.com/ul/?action=setPickup&client_id=DLJ96wPxCTyRRckQSDfD3plC9pM7dM8o&pickup=my_location&dropoff[formatted_address]=Av.%20Gov.%20Jos%C3%A9%20Malcher%2C%20n%20716%20-%20S%C3%A3o%20Br%C3%A1s%2C%20Bel%C3%A9m%20-%20PA%2C%20Brasil&dropoff[latitude]=-1.451325&dropoff[longitude]=-48.487094-->
            <!--https://goo.gl/maps/iqk2ehpeGTvZSPH7A-->

            <p class="border rounded font-weight-bold text-uppercase bg-dark pt-1 pb-1 pl-1" style="width: 12em;"><a href="https://m.uber.com/ul/?action=setPickup&client_id=DLJ96wPxCTyRRckQSDfD3plC9pM7dM8o&pickup=my_location&dropoff[formatted_address]=Av.%20Gov.%20Jos%C3%A9%20Malcher%2C%20n%20716%20-%20S%C3%A3o%20Br%C3%A1s%2C%20Bel%C3%A9m%20-%20PA%2C%20Brasil&dropoff[latitude]=-1.451325&dropoff[longitude]=-48.487094" class="text-white text-decoration-none">
                    <img src="assets/redesSociais/uber.svg" width="25em">
                    Venha até nós.
                </a></p>
        </div>
        <div class="col bg-danger border border-danger rounded p-2 shadow">
            <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.5379894598714!2d-48.489454!3d-1.451556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a48e9ae97483b7%3A0x139f8d18dc82e930!2sAv.%20Gov.%20Jos%C3%A9%20Malcher%2C%20716%20-%20S%C3%A3o%20Br%C3%A1s%2C%20Bel%C3%A9m%20-%20PA%2C%2066060-232!5e0!3m2!1spt-BR!2sbr!4v1602809863920!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <br><br>
<?php
}


//função para exibir o campo contato
function rodape()
{
?>
    <div class="container-fluid row" style="font-size: 9pt;">
        <div class="col">
            &copy; Copyright - Todos os direitos reservados - Dimare - Belém 2020.
        </div>
        <div class="col">
            <p class="text-right">
                <a href="https://www.facebook.com/dimare.belem/"> <img src="assets/redesSociais/facebook.svg" width="25em" title="Facebook"> </a>
                <a href="https://www.instagram.com/dimare.belem/"> <img src="assets/redesSociais/instagram.svg" width="25em" title="Instagram"> </a>
                Desenvolvido por <strong>Alexandre Santana</strong></p>
        </div>

    </div>
<?php
}
?>