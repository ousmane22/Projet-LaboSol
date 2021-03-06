   @extends('layouts.main')
   @section('content')
   <br><br><br><br><br><br><b><br></br>
     <!-- Hoverable rows start -->
     <div class="row" id="table-hover-row">
       <div class="col-md-12">

         <div class="card">
           <div class="card-header">
             <h1 class="card-title text-success pb-2">Liste Echantillons</h1>
           </div>
           <div class="">
             <div class="table-responsive">
               <table class="table table-hover mt-6">
                 <thead class="text-success">
                   <tr>
                     <th style="font-size:16px;">Code</th>
                     <th style="font-size:16px;">Désignation</th>
                     <th style="font-size:16px;">Date</th>
                     <th style="font-size:16px;">Client</th>
                     <th style="font-size:16px;">Numéro Fiche demande</th>
                     <th style="font-size:16px;">Type echantillon</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach($echantillon as $echantillons)
                   <tr style="font-size: 14px;">
                     <td>{{ $echantillons->id }}</td>
                     <td>{{ $echantillons->designation }}</td>
                     <td>{{ date('d/m/Y' ,strtotime($echantillons->date)) }}</td>
                     <td>{{ $echantillons->client->nom }}</td>
                     <td class="text-center">{{ $echantillons->fichedemande_id }}</td>
                     <td>{{ $echantillons->typeechantillon->type }}</td>
                   </tr>
                 </tbody>
                 @endforeach
               </table>
               {{ $echantillon->links() }}
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- Basic Tables end -->
     @endsection