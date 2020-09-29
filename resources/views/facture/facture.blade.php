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
                           <tr class="">
                              <th>Code Fiche demande</th>
                              <th>Facture Proforma</th>
                              <th>Facture Définitive</th>
                              </h3>
                        </thead>
                        <tbody>
                           @foreach($fiche as $fiches)
                           <tr class="">
                              <td class="font-large-1">{{ $fiches->id }}</td>
                              <td><a href="{{ route('proforma',$fiches->id) }}" class="fa fa-print fa-2x"></a></td>
                              <td><a href="http://" class="fa fa-print fa-2x"></a></td>
                           </tr>
                        </tbody>
                        @endforeach
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Basic Tables end -->
      @endsection