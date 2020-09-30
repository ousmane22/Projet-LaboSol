<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>

 <style>
  th,
  td {
   padding: 8px;
  }
 </style>
</head>

<body>
 <div>
  <h1 style="text-align: center;">Liste des clients</h1>
 </div>

 <table border="1" style="border-collapse: collapse;">
  <thead>
   <tr>
    <th style="width: 40px;">NOM</th>
    <th>TELEPHONE</th>
    <th>EMAIL</th>
    <th>ADRESSE</th>
    <th>TYPE CLIENT</th>
    <th>DETAILS</th>
   </tr>
  </thead>

  <tbody>
   @foreach($client as $clients)
   <tr>
    <td style="width: 40px;">{{ $clients->nom }}</td>
    <td>{{ $clients->telephone }}</td>
    <td>{{ $clients->email }}</td>
    <td>{{ $clients->adresse }}</td>
    <td>{{ $clients->type->type}}</td>
    <td>{{ $clients->detailType->details  }}</td>

   </tr>
   @endforeach
  </tbody>
 </table>
</body>

</html>