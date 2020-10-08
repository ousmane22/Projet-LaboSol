@extends('layouts.main')
@section('content')



<br><br><br><br><br></br></br><br>



<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
  <div class="col-md-12">




    @include('inc.barreRecherche')
    <a href="{{ route('list.client') }}" class="btn btn-success mb-2">Voir Tout</a>
    @if($client->total() <= 0) <div class="alert alert-danger">
      <h1>Ce client n'existe pas !!!!</h1>
  </div>
  @else



  <div class="card">
    <div class="card-header">
      <h4 class="card-title text-success pb-2">Liste Clients</h4>
    </div>
    <div class="">
      <div class="table-responsive">
        <table class="table table-hover mt-6">
          <thead>
            <tr class="text-success">
              <th style="font-size:16px;">Nom</th>
              <th style="font-size:16px;">TELEPHONE</th>
              <th style="font-size:16px;">EMAIL</th>
              <th style="font-size:16px;">ADRESSE</th>
              <th style="font-size:16px;">TYPE CLIENT</th>
              <th style="font-size:16px;">DETAIL</th>
              <th style="font-size:16px;">Action</th>

            </tr>
          </thead>
          <tbody">
            @foreach($client as $clients)
            <tr class="font-weight-bold" style="font-weight: bold; font-size:14px;">
              <td>
                {{ $clients->nom }}
              </td>
              <td>
                {{ $clients->telephone }}
              </td>
              <td>
                {{ $clients->email }}
              </td>
              <td>
                {{ $clients->adresse }}
              </td>

              <td class="product-price">
                {{ $clients->type->type }}
              </td>

              <td class="product-price">
                {{ $clients->detailType->details }}
              </td>

              <td class="product-action">
                <span class="action-edit"><i class="feather icon-edit"></i></span>
              </td>
            </tr>
            @endforeach
            </tbody>
            {{ $client->links() }}
        </table>

      </div>
    </div>
  </div>
</div>
</div>
<!-- Basic Tables end -->
@endif
@stop