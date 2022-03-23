<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contrato {{ $contract->contractEstates[0]->address }}</title>
    <link rel="stylesheet" href="style.css" media="all" />
    <style>
        .clearfix:after {
        content: "";
        display: block;
        clear: both;
        }

        a {
        color: #5D6975;
        text-decoration: underline;
        }

        body {
        position: relative;
        width: auto;  
        height: 29.7cm; 
        margin: 0 auto; 
        color: #001028;
        background: #FFFFFF; 
        font-family: Arial, sans-serif; 
        font-size: 12px; 
        font-family: Arial;
        }

        header {
        padding: 10px 0;
        margin-bottom: 30px;
        }

        #logo {
        text-align: center;
        margin-bottom: 10px;
        }

        #logo img {
        width: 90px;
        }

        h1 {
        border-top: 1px solid  #5D6975;
        border-bottom: 1px solid  #5D6975;
        color: #5D6975;
        font-size: 2.4em;
        line-height: 1.4em;
        font-weight: normal;
        text-align: center;
        margin: 0 0 20px 0;
        background: url(dimension.png);
        }

        h5 {
        border-top: 1px solid  #5D6975;
        border-bottom: 1px solid  #5D6975;
        color: #5D6975;
        font-size: 1.4em;
        line-height: 1.4em;
        font-weight: normal;
        text-align: center;
        margin: 0 0 20px 0;
        background: url(dimension.png);
        }
        #project {
            float: left;
            }

        #project span {
            color: #5D6975;
            text-align: left;
            width: 40%;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #project div,
        #company div {
           white-space: nowrap;        
        }


        table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
        background: #F5F5F5;
        }

        table th,
        table td {
        text-align: center;
        }

        table th {
        padding: 5px 20px;
        color: #5D6975;
        border-bottom: 1px solid #C1CED9;
        white-space: nowrap;        
        font-weight: normal;
        }

        table .service,
        table .desc {
        text-align: center;
        width: 30%;
        }

        table td {
        padding: 20px;
        text-align: right;
        }

        table td.service,
        table td.desc {
        vertical-align: top;
        }

        table td.unit,
        table td.qty,
        table td.total {
        font-size: 1.2em;
        }

        table td.grand {
        border-top: 1px solid #5D6975;;
        }

        #notices .notice {
        color: #5D6975;
        font-size: 1.2em;
        }

        footer {
        color: #5D6975;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #C1CED9;
        padding: 8px 0;
        text-align: center;
        }
    </style>
  </head>
  <body>
    <header class="clearfix">
        <h1>Contrato {{ $contract->contractEstates[0]->address }} </h1>
        <div id="company" class="clearfix">
            <div>INMUEBLE: {{$contract->contractEstates[0]->address }} </div>
            <div>TIPO DE INMUEBLE {{ $contract->contractEstates[0]->typeEstate }}</div>
            <div>MATRICULA INMOBILIARIA: <b>{{ $contract->typeContract }}</b></div>
            <div>ADMINISTRACION: <b>{{ $contract->typeContract }}</b></div>
        </div>
        <div id="project" >
            <div><span>POLIZA AGUA:</span> Website development</div>
            <div><span>POLIZA LUZ</span> John Doe</div>
            <div><span>POLIZA GAS</span> 796 Silver Harbour, TX 79273, US</div>
            <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
            <div><span>DATE</span> August 17, 2015</div>
            <div><span>DUE DATE</span> September 17, 2015</div>
        </div>
    </header>
    <main>
    <h5>INMUEBLE</h5>
    @foreach ($contract->contractEstates as $estate)

    @endforeach
    @foreach ($contract->contractPerson as $person)
    <h5>{{ $person->pivot->typeParticipant }}</h5>
      <table>
        <thead>
          <tr>
            <th class="service">PACTICIPANTE</th>
            <th class="desc">TIPO DE PERSONA</th>
            <th>CORREO</th>
            <th>TELEFONO</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>        
          <tr>
            <td class="service">{{ $person->names }}<br>{{ $person->typeDni}}:{{ $person->dni }}</td>
            <td class="desc">{{ $person->pivot->typePerson}} </td>
            <td class="unit">{{ $person->email}}</td>
            <td class="qty">{{ $person->phone}}</td>
          </tr>        
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">$6,500.00</td>
          </tr>
        </tbody>
      </table>
      @endforeach
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>