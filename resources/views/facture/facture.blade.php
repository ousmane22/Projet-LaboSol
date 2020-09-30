   @extends('layouts.main')
   @section('content')

   <br><br><br><br><br><br><b><br></br>
      <!-- Hoverable rows start -->
      <div class="row" id="table-hover-row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <h1 class="card-title text-success pb-5">Gestion facturation</h1>
               </div>
               <div class="">
                  <div class="table-responsive">
                     <table class="table table-hover mt-6">
                        <thead class="text-success">
                           <tr>
                              <th style="font-size: 17px;">Code Fiche demande</th>
                              <th style="font-size: 17px;">Nom client</th>
                              <th style="font-size: 17px;">Facture Proforma</th>
                              <th style="font-size: 17px;">Facture Définitive</th>
                              </h3>
                        </thead>
                        <tbody>
                           @foreach($fiche as $fiches)
                           <tr class="">
                              <td style="font-size: 17px;">{{ $fiches->id }}</td>
                              <td style="font-size: 17px;">{{ $fiches->client->nom }}</td>
                              <td><a href="{{ route('proforma',$fiches->id) }}" class="fa fa-print fa-2x"></a></td>
                              <td><a href="{{ route('definitive',$fiches->id) }}" class="fa fa-print fa-2x"></a></td>
                           </tr>
                        </tbody>
                        @endforeach
                     </table>
                  </div>
                  {{ $fiche->links() }}
               </div>
            </div>
         </div>
      </div>
      <!-- Basic Tables end -->
      @endsection