<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facture</title>

  <style>
    #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid black;
      padding: 8px;
    }




    #customers th {

      text-align: left;
      color: black;
    }
  </style>
</head>

<body>

  <header>
    <div style="display:block;">
      <div style="float:left">
        <div style="color: green; padding-top:0%;">
          <h5>REPUBLIQUE DU SENEGAL</h5>
          <p><span style="color:green; padding-bottom:3%;">Un Peuple</span> -
            <span style="color:yellowgreen">Un But</span> -
            <span style="color:red">Une Foi</span></p>

          <h5>MINISTERE DE L'AGRICULTURE <br>
            ET DE L'EQUIPEMENT RURAL
          </h5>
          <P>
            <img src="images/logo.jpg" alt="" width="60" height="60" style="padding-bottom: 0%;">
          </P>
          <h5>INSTITUT SENEGALAISE DE <br>
            RECHERCHES AGRICOLES
          </h5>
          <h5>
            CENTRE NATIONALE DE
            <br> RECHERCHES AGRONOMIQUES
          </h5>
        </div>
      </div>
    </div>

    <!--right div -->
    <div style="text-align: right;">
      N°________________/ISRA/CNRA/SA <br><br>
      Bambey,le________________________ <br><br>

      @foreach($fiche as $fiches)
      <h4><span style="color:green">CLIENT</span>:{{ $fiches->client->nom }} ({{ $fiches->client->type->type }})
      </h4>
      @endforeach

    </div>
    </div>
  </header>


  <section style="margin-top:20% ;">
    <div>
      <h3 style="text-align:center;">FACTURE PROFORMA N°___________________</h3>
    </div>

    <table id="customers">
      <thead>
        <tr>
          <th>DESIGNATION</th>
          <th>QUANTITE</th>
          <th>PRIX UNITAIRE</th>
          <th>MONTANT</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $total = 0;
        $result = 0;
        ?>

        @foreach($fiche as $fiches)
        @foreach($fiches->analysedemande as $analyseDemander)

        <tr>
          <td>{{ $analyseDemander->nom }}</td>
          <td>{{ $fiches->nombre_echantillon }}</td>
          @foreach($analyseDemander->prix as $pri)

          <td>
            @if($fiches->client->type = 'Interne')
            {{ $pri->prix_interne }}
            @else($fiches->client->type = 'Externe')
            {{ $pri->prix_externe }}
            @endif
          </td>

          <td>
            @if($fiches->client->type = 'Interne')
            <?php
            // $prix = $pri->prix_interne;

            $result =  $pri->prix_interne * $fiches->nombre_echantillon;
            echo $result;
            //calcul total facture
            $total = $total + $result;
            ?>
            @else($fiches->client->type = 'Externe')
            <?php $result = $pri->prix_interne * $fiches->nombre_echantillon;
            echo $result;
            $total = $total + $result;
            ?>
            @endif
          </td>

          @endforeach
        </tr>
        @endforeach
        @endforeach
        <tr>
          <td colspan="3">
            <h4>TOTAL</h4>
          </td>
          <td>
            <h4>
              @php echo $total; @endphp
            </h4>
          </td>
        </tr>
      </tbody>
    </table>
  </section>
  <footer>

    <p>Arrêtée la présence facture proforma à la somme de : @php echo NumConvert::word(1); @endphp</p>

    <h5 style="color: red;">
      Conditions:Règlement 50% avant démarrage des analyses , soit :
      <span style="color:black;">
        @php echo ($total / 2) . ' Frs CFA'; @endphp
      </span>
    </h5>

    <div style="display: block; margin-top:10px">
      <div style="display: inline-block;">
        Le chef du Service Administratif
      </div>

      <div style="float: right;">
        La Directrice
      </div>
    </div>

    <div>
      <h5 style="margin-top: 20%; text-align:center;">
        BP53 - BAMBEY - TEL/FAX 33 973 63 48 - E-mail : cnrabambey@isra.sn
      </h5>
    </div>
  </footer>

</body>

</html>