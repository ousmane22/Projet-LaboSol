<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>

 <style>
  #customers {
   font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
   border-collapse: collapse;
   width: 100%;
  }

  #customers td,
  #customers th {
   border: 1px solid #ddd;
   padding: 8px;
  }

  #customers tr:nth-child(even) {
   background-color: #f2f2f2;
  }

  #customers tr:hover {

   margin-bottom: 10px;
  }

  #customers th {
   padding-top: 12px;
   padding-bottom: 12px;
   text-align: left;
   color: black;
  }

  h5 {
   font-size: 0;
   /* remove whitespace */
  }
 </style>
</head>

<body>

 <header>
  <div style="display-block; margin-left:25px;margin-right:25px;">
   <div style="float-left;  display: inline-block;">
    <p style="margin-top: 7px;">REPUBLIQUE DU SENEGAL</p>
    <p>Un Peuple - Un But - Une Foi</p>
    --------------------------------------
    <h4>
     MINISTERE DE L'AGRICULTURE <br>
     ET DE L'EQUIPEMENT RURAL
    </h4>

    --------------------------------------
    <h4>INSTITUT SENEGALAISE DE
     RECHERCHES AGRICOLES
    </h4>
    <img src="images/logo.jpg" alt="" width="100" height="100">
    <h4>CENTRE NATIONALE DE RECHERCHES AGRONOMIQUES</h4>
   </div>

   <div style="float: right;">
    <h4>
     N°------------------/ISRA/CNRA/SA <br><br><br>

     Bambey ,le --------------------
    </h4>
   </div>
  </div>
 </header>

 <section style="margin-left: 25px; margin-right:25px;">
  <div>
   <h1 style="text-align: center;">FACTURE PROFORMA N° </h1>

   @foreach($fiche as $fiches)
   <h1>CLIENT :
    {{ $fiches->client->nom}}

   </h1>
   @endforeach

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
    @foreach($fiche as $fiches)
    <tr>
     @foreach($fiches->analysedemande as $analyseDemander)
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
      <?php $result = 0;
      $prix = $pri->prix_interne;

      $result =  $pri->prix_interne * $fiches->nombre_echantillon;
      echo $result
      ?>
      @else($fiches->client->type = 'Externe')
      <?php $result = $pri->prix_interne * $fiches->nombre_echantillon;
      echo $result;
      ?>
      @endif
     </td>
     @endforeach
    </tr>
    @endforeach
    @endforeach
   </tbody>
  </table>

 </section>

</body>

</html>