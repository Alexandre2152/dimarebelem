<?php
function ContContato()
{
?>

    <div class=" bg-white border border-danger rounded shadow p-1" style="margin-top: -4em;">
        <br>
        <p class="text-center text-uppercase font-weight-bold border-bottom border-danger w-50 mx-auto">Estamos disponíveis de segunda a sexta, em horário comercial das 9h às 18h & Sábado das 9h às 13h</p>
        <br>

        <!-- Mapa -->
        <div class="col border border-danger rounded p-2 shadow">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.5379894598714!2d-48.489454!3d-1.451556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a48e9ae97483b7%3A0x139f8d18dc82e930!2sAv.%20Gov.%20Jos%C3%A9%20Malcher%2C%20716%20-%20S%C3%A3o%20Br%C3%A1s%2C%20Bel%C3%A9m%20-%20PA%2C%2066060-232!5e0!3m2!1spt-BR!2sbr!4v1602809863920!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <!-- Endereço -->
        <div class="text-center text-danger">
            <p>Av. Gov. José Malcher, nº 716. Loja A e B. Bairro Nazaré. CEP: 66060232. Belém-Pará</p>
        </div>

        <!-- Tipos de contatos -->
        <div class="container-sm  font-weight-bold">
            <ul>
                <li>Telefone: (91) 4042-0743</li>
                <li>E-mail: loja@lojadimarebelem.com.br</li>
            </ul>

            <div class="container-sm text-center">
                <a class="text-decoration-none text-danger" href="https://api.whatsapp.com/send?phone=5591987299817&text=Ol%C3%A1%20sou%20a%20vendedora%20Jamilly%20%C3%A9%20um%20prazer%20lhe%20atender!%20Logo%20responderei.">
                    Entre em conto por <strong class="text-uppercase">whatsapp</strong>
                    <img src="assets/redesSociais/whatsapp.svg" width="25em" title="Whatsapp">
                </a>
                <span> ou </span>
                <span class="border rounded font-weight-bold text-uppercase bg-dark p-2" style="width: 12em;">
                    <a href="https://m.uber.com/ul/?action=setPickup&client_id=DLJ96wPxCTyRRckQSDfD3plC9pM7dM8o&pickup=my_location&dropoff[formatted_address]=Av.%20Gov.%20Jos%C3%A9%20Malcher%2C%20n%20716%20-%20S%C3%A3o%20Br%C3%A1s%2C%20Bel%C3%A9m%20-%20PA%2C%20Brasil&dropoff[latitude]=-1.451325&dropoff[longitude]=-48.487094" class="text-white text-decoration-none">
                        <img src="assets/redesSociais/uber.svg" width="25em">
                        Venha até nós.
                    </a>
                </span>
                <br><br>
            </div>
        </div>



    </div>
    <br>

<?php
}
?>