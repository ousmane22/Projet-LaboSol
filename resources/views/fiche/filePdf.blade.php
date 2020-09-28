<!DOCTYPE html>
<html lang="fr">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Fiche Demande</title>
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



 <img src="images/logo.jpg" alt="" width="100" height="100">

 <h3 class="" style="color:green; text-align:center;">Laboratoire central Sols-Eaux-Plantes de Bambey</h3>
 <h4 style="color:green; text-align:center;">Demande d'analyses</h4>

 <h4>
  Date :{{ date('d/m/Y' ,strtotime($fiche->DateReception)) }}
 </h4>
 <h2 style="color:green; text-align:center;">FICHE DEMANDE D'ANALYSE</h2>


 <table id="customers">

  <tr>
   <td>Demandeur</td>
   <td>{{ $fiche->client->nom }}</td>
  </tr>

  
  <tr>
   <td>Nombre Echantillons</td>
   <td>{{ $fiche->nombre_echantillon }}</td>
  </tr>


  <tr>
   <td>Longitude</td>
   <td>{{ $fiche->longitude }}</td>
  </tr>

  <tr>
   <td>Latitude</td>
   <td>{{ $fiche->latitude }}</td>
  </tr>

  <tr>
   <td>Culture</td>
   <td>{{ $fiche->culture }}</td>
  </tr>

  <tr>
   <td>Antécédents Culturaux</td>
   <td>{{ $fiche->AntecedentsCulturaux }}</td>
  </tr>

  <tr>
   <td>Livré par</td>
   <td>{{ $fiche->livrerPar }}</td>
  </tr>

  <tr>
   <td>Réceptionné par</td>
   <td>{{ $fiche->receptionerPar }}</td>
  </tr>
 </table>

 <div>
  <h4 style="color:green;">Analayse Demandées</h4>
  <ul>
    @foreach($fiche->analysedemande as $fiches)
  <li>{{ $fiches->nom }}</li>
  @endforeach
  </ul>
 
 </div>

 <br><br>
 <table id="customers">
  <tr>
   <td style="text-align: center;">Demandeur</td>
   <td style="text-align: center;">Chef du laboratoire</td>
  </tr>
  <td></td>
  <td></td>
 </table>
</body>

</html>