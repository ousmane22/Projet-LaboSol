
@extends('layouts.main')
@section('content')
<br><br><br><br><br></br></br><br>

<!-- Basic File Browser start -->
<section id="input-file-browser">
 <div class="row">
  <div class="col-md-12">
   <div class="card">
    <div class="card-header">
     <label class="card-title text-success">Fiches analyses et résultats</label>
    </div>
    <form action="{{ route('store.result') }}" method="post" enctype="multipart/form-data">
    @csrf
     <div class="card-content">
      <div class="card-body">
       <div class="row">

        <div class="col-lg-6 col-md-12">
         <fieldset class="form-group">
          <label for="basicInputFile">Numéro de la fiche demande</label>
          <select name="fichedemande_id" id=""  class="form-control">
           <option value="{{ $fiche->id }}">{{ $fiche->id }}</option>
          </select>
         </fieldset>
        </div>

        <div class="col-lg-6 col-md-12">
         <fieldset class="form-group">
          <label for="basicInputFile">Fiche résultat</label>
          <input type="file" class="form-control" name="NOMFICHE">
         </fieldset>
        </div>

        <button type="submit" class="btn btn-block btn-success">Enregistrer</button>
       </div>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</section>
<!-- Basic File Browser end -->
@endsection