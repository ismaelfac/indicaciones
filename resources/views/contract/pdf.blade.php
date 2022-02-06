<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contrato No {{ $contract->contractNum }} - {{ $contract->arrendatarioName}}</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
     
        <div id="logo">
          <img src="logo2.png">
          <h2 class="name">Indicaciones de Contrato</h2>
        </div>
        <div id="company">
          <h2 class="name">{{ $contract->contractNum }}</h2>
          <div>Asegurable {{ $contract->asegurable }}</div>
          <div>Domus {{ $contract->domus }}</div>
          <div><a href="mailto:company@example.com">company@example.com</a></div>
        </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to"><b>ARRENDATARIO:</b> </div>
          <h2 class="name">{{ $contract->arrendatarioName ? $contract->arrendatarioName : 'ISMAEL ENRIQUE LASTRE ALVAREZ' }}   </h2>
          <div class="address">NIT / CEDULA : {{ $contract->arrendatarioDni ? $contract->arrendatarioDni : '72288959'}}</div>
          <div class="email"><a href="mailto:john@example.com">{{ $contract->arrendatarioEmail ? $contract->arrendatarioEmail : 'ismaelfac@gmail.com'}}</a></div>
        </div>
        <div id="invoice">
        <div class="address">Telefono Contacto: {{ $contract->arrendatarioPhone ? $contract->arrendatarioPhone : '3113258468' }}</div>
          <div class="date">Date of Invoice: 01/06/2014</div>
          <div class="date">Due Date: 30/06/2014</div>
        </div>
      </div>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to"><b>DEUDOR:</b> </div>
          <h2 class="name">{{ $contract->deudorName ? $contract->deudorName : 'VANESSA DE LAS SALAS' }}   </h2>
          <div class="address">NIT / CEDULA : {{ $contract->arrendatarioDni ? $contract->arrendatarioDni : '500231'}}</div>
          <div class="email"><a href="mailto:john@example.com">{{ $contract->arrendatarioEmail ? $contract->arrendatarioEmail : 'vdelassalas@aliadosinmobiliariossa.com'}}</a></div>
        </div>
        <div id="invoice">
        <div class="address">Telefono Contacto: {{ $contract->arrendatarioPhone ? $contract->arrendatarioPhone : '30020000000' }}</div>
          <div class="date">Date of Invoice: 01/06/2014</div>
          <div class="date">Due Date: 30/06/2014</div>
        </div>
      </div>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to"><b>INMUEBLE:</b> </div>
          <h2 class="name">{{ $contract->estateAddress ? $contract->estateAddress : 'CLL 84B # 37-69 APTO 3 BARRIO EL RUBY' }}   </h2>
          <div class="address">NIT / CEDULA : {{ $contract->arrendatarioDni ? $contract->arrendatarioDni : '72288959'}}</div>
          <div class="email"><a href="mailto:john@example.com">{{ $contract->arrendatarioEmail ? $contract->arrendatarioEmail : 'ismaelfac@gmail.com'}}</a></div>
        </div>
        <div id="invoice">
        <div class="address">Telefono Contacto: {{ $contract->arrendatarioPhone ? $contract->arrendatarioPhone : '3113258468' }}</div>
          <div class="date">Date of Invoice: 01/06/2014</div>
          <div class="date">Due Date: 30/06/2014</div>
        </div>
      </div>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Este documento fue creado por aliados inmobilairios sa.
    </footer>
  </body>
</html>