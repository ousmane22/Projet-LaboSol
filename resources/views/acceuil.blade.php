@extends('layouts.main')
@section('content')
<br><br><br><br><br><br><br>
<h1 class="text-center text-success pb-4">Laboratoire Sols-Eaux-Plantes ISRA</h1>
<div class="content-body">
 <!-- Dashboard Ecommerce Starts -->
 <section id="dashboard-ecommerce">
  <div class="row">
   <div class="col-lg-4 col-sm-6 col-12">
    <div class="card">
     <div class="card-header d-flex flex-column align-items-start pb-0">
      <div class="avatar bg-rgba-primary p-50 m-0">
       <div class="avatar-content">
        <i class="feather icon-users text-primary font-medium-5"></i>
       </div>
      </div>
      <h2 class="text-bold-700 mt-1 text-success">Clients</h2>
      <h3>Total :{{ $client->count() }}</h3>
     </div>
     <div class="card-content">
      <div id="line-area-chart-1"></div>
     </div>
    </div>
   </div>
   <div class="col-lg-4 col-sm-6 col-12">
    <div class="card">
     <div class="card-header d-flex flex-column align-items-start pb-0">
      <div class="avatar bg-rgba-success p-50 m-0">
       <div class="avatar-content">
        <i class="feather icon-filter text-success font-medium-5"></i>
       </div>
      </div>
      <h2 class="text-bold-700 mt-1 text-success">Echantillons</h2>
      <h3>Total :{{ $echantillon->count() }}</h3>
     </div>
     <div class="card-content">
      <div id="line-area-chart-2"></div>
     </div>
    </div>
   </div>
   <div class="col-lg-4 col-sm-6 col-12">
    <div class="card">
     <div class="card-header d-flex flex-column align-items-start pb-0">
      <div class="avatar bg-rgba-danger p-50 m-0">
       <div class="avatar-content">
        <i class="feather icon-file text-danger font-medium-5"></i>
       </div>
      </div>
      <h2 class="text-bold-700 mt-1 text-success">Fiches Demandes</h2>
      <h3>Total :{{ $fiche->count() }}</h3>
     </div>
     <div class="card-content">
      <div id="line-area-chart-3"></div>
     </div>
    </div>
   </div>

  </div>
  @endsection