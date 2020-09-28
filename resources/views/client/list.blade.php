@extends('layouts.main')
@section('content')



<br><br><br><br><br></br></br><br>



<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
     <div class="col-md-12">
          <!--rechercher-->
          @include('inc.barreRecherche')

          <div class="card">
               <div class="card-header">
                    <h4 class="card-title text-success pb-2">Liste Clients</h4>
               </div>
               <div class="">
                    <div class="table-responsive">
                         <table class="table table-hover mt-6">
                              <thead>
                                   <tr>
                                        <th>Nom</th>
                                        <th>TELEPHONE</th>
                                        <th>EMAIL</th>
                                        <th>ADRESSE</th>
                                        <th>TYPE CLIENT</th>
                                        <th>DETAIL Postal</th>
                                        <th>Action</th>

                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach($client as $clients)
                                   <tr>
                                        <td class="product-name">
                                             <h5>{{ $clients->nom }}</h5>
                                        </td>
                                        <td class="product-category">
                                             <h5>{{ $clients->telephone }}</h5>
                                        </td>
                                        <td class="product-category">
                                             <h5>{{ $clients->email }}</h5>
                                        </td>
                                        <td>
                                             <h5>{{ $clients->adresse }}</h5>
                                        </td>

                                        <td class="product-price">
                                             <h5>{{ $clients->type->type }}</h5>
                                        </td>

                                        <td class="product-price">
                                             <h5>{{ $clients->detailType->details }}</h5>
                                        </td>


                                        <td class="product-action">
                                             <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                              {{ $client->links() }}
                         </table>
                         {{ $client->links() }}
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- Basic Tables end -->
@stop