@extends('layouts.main')
@section('content')

<br><br><br><br><br><br><br>
<div id="echantillon">
 <div class="card col-md-6 col-lg-12">
  <div class="card-header">
   <h1 class="text-success">Ajouter un nouveau echantillon</h1>
  </div>
  <div class="card-body">
   <echantillon-component></echantillon-component>
  </div>
 </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

@endsection