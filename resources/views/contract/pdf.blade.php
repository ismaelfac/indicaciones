<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contrato No {{ $contract->asegurable }} - {{ $contract->arrendatarioName}}</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
     
        <div id="logo">
          <img src="logo2.png">
          <h2 class="name">Indicaciones de Contrato</h2>
        </div>
        <div id="company">
          <h2 class="name">{{ $contract->asegurable }}</h2>
          <div>Asegurable {{ $contract->asegurable }}</div>
          <div>Domus {{ $contract->domus }}</div>
          <div><a href="mailto:company@example.com">company@example.com</a></div>
        </div>
    </header>
    <main>
      @foreach ($contract->contractPerson as $person)
      <div id="details" class="clearfix">
        
        <div id="client">
        
          <div class="to"><b>{{ $person->pivot->typePerson }}:</b> </div>
          <h2 class="name">{{ $person ? $person->names : 'NO DEFINIDO' }}   </h2>
          <div class="address">{{  $person->typeDni }} : {{ $person->dni ? $person->dni : 'NO DEFINIDO'}}</div>
          <div class="email"><a href="mailto:john@example.com">{{ $person->email ?$person->email : 'NO DEFINIDO'}}</a></div>
        </div>       
        <div id="invoice">
          <div class="to">.</div>
          <div class="address">Telefono Contacto: {{  $person->phone ?  $person->phone : 'NO DEFINIDO' }}</div>
        </div>        
      </div>
      @endforeach
      @foreach ($contract->estates as $estate)
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to"><b>INMUEBLE:</b> {{ $estate->address ? $estate->address : 'NO DEFINIDO' }} </div>
          <div class="address">Garaje  : {{ $estate->garajes ? $estate->garajes : 'NO DEFINIDO' }}</div>
          <div class="address">Cuarto Util  : {{ $estate->usefulRoom ? $estate->usefulRoom : 'NO DEFINIDO' }}</div>
        </div>
        <div id="invoice">
        <div class="address">Tipo de Inmueble: {{ $estate->typeEstate ? $estate->typeEstate : 'NO DEFINIDO' }}</div>
          <div class="date">Fecha de Entrega:{{ $contract->deliveryDate}}</div>
          <div class="date">Due Date: 30/06/2014</div>
        </div>
      </div>
      @endforeach
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to"><b>VALOR DEL ARRIENDO:</b> {{ $contract->cannonLease ? $contract->cannonLease : 'NO DEFINIDO' }} </div>
          <div class="address">Cannon  : {{ $contract->adminValue ? $contract->adminValue : 'NO DEFINIDO' }}</div>
          <div class="address">Cuarto Util  : {{ $contract->increment ? $contract->increment : 'NO DEFINIDO' }}</div>
        </div>
        <div id="invoice">
        <div class="address">Derechos de Contrato {{ $contract->contractRights ? $contract->contractRights : 'NO DEFINIDO' }}</div>
          <div class="date">Periodo de Gracia:{{ $contract->gracePeriod ? $contract->gracePeriod : 'NO DEFINIDO' }}</div>
          <div class="date">Due Date: 30/06/2014</div>
        </div>
      </div>
      <div id="notices">
        <div>CLAUSULAS:</div>
        <div class="notice">{{ $contract->clause ? $contract->clause : ''}}</div>
      </div>
    </main>
    <footer>
      Este documento fue creado por aliados inmobilairios sa.
    </footer>
  </body>
</html>