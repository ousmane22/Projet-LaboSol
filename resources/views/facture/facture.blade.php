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
           <tr class="font-size-large">
            <th>Code Fiche demande</th>
            <th>Facture</th>
           </tr>
          </thead>
          <tbody>
           @foreach($fiche as $fiches)
           <tr class="">
            <td>{{ $fiches->id }}</td>
            <td><a href="http://" class="fa fa-print"></a></td>
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