@extends('layouts.main')
@section('content')



<br><br><br><br><br></br></br><br>



<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
 <div class="col-md-12">
  <!--rechercher-->

  @if(session('success'))
  <div class="alert alert-success">
   {{ session('success') }}
  </div>
  @endif

  <div class="card">
   <div class="card-header">
    <h4 class="card-title text-success pb-4">Liste Fiches Demande D'analyse</h4>
   </div>
   <div class="">
    <div class="table-responsive">
     <table class="table table-hover mt-6">
      <thead class="text-success">
       <tr>
        <th>Analyse</th>
        <th>Prix Interne</th>
        <th>Prix Externe</th>
        <th>Prix Modifier</th>
       </tr>
      </thead>
      <tbody>
       @foreach($analysePrix as $analyse)
       <tr>
        <td class="product-name">
         <h5>{{ $analyse->nom }}</h5>
        </td>
        @foreach($analyse->prix as $pri)
        <td class="product-category">
         <h5>{{ $pri->prix_interne }}</h5>
        </td>
        <td class="product-category">
         <h5>{{ $pri->prix_externe }}</h5>
        </td>
        @endforeach
        <td>
         <a href="http://"><i class="fa fa-edit fa-2x"></i></a>
        </td>
       </tr>
       @endforeach
      </tbody>
     </table>
     {{ $analysePrix->links() }}
    </div>
   </div>
  </div>
 </div>
</div>
<!-- Basic Tables end -->

<script src="//code.jquery.com/jquery.js"></script>
@include('flashy::message')
@stop