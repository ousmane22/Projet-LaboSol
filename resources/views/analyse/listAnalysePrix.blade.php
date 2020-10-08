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
        <th style="font-size: 20px;">Analyse</th>
        <th style="font-size: 20px;">Prix Interne</th>
        <th style="font-size: 20px;">Prix Externe</th>
        <th style="font-size: 20px;">Modifier</th>
       </tr>
      </thead>
      <tbody>
       @foreach($analysePrix as $analyse)
       <tr style="font-weight: bold; font-size:16px;">
        <td class="product-name">
         {{ $analyse->nom }}
        </td>
        @foreach($analyse->prix as $pri)
        <td class="product-category">
         {{ $pri->prix_interne }}
        </td>
        <td class="product-category">
         {{ $pri->prix_externe }}
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