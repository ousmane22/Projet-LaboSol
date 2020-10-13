@extends('layouts.main')

@section('content')

<!-- BEGIN: Content-->
<div class="app-content content">
 <div class="content-overlay"></div>
 <div class="header-navbar-shadow"></div>
 <div class="content-wrapper">
  <div class="content-header row">
   <div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
     <div class="col-12">
      <h2 class="content-header-title float-left mb-0 text-success pb-2">Ajouter Fiche Demande D'analyse</h2>

     </div>
    </div>
   </div>
   <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
    <div class="form-group breadcrum-right">
     <div class="dropdown">
      <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
     </div>
    </div>
   </div>
  </div>
  <div class="content-body">
   <!-- // Basic multiple Column Form section start -->
   <section id="multiple-column-form">
    <div class="row match-height">
     <div class="col-12">
      <div class="card">
       <div class="card-header">
        <script src="//code.jquery.com/jquery.js"></script>
        @include('flashy::message')
       </div>
       <div class="card-content">
        <div class="card-body">
         <form class="form" action="{{  route('store.fiche') }}" method="POST">
          @csrf
          <div class="form-body">
           <div class="row">

            <div class="col-md-6 col-12">
             <div class="form-group">
              <label for="nombre_echantillon">Nombre Echantillon</label>
              <input type="number" id="nombre_echantillon" class="form-control p-4" placeholder="nombre_echantillon" name="nombre_echantillon" value="{{ old('nombre_echantillon') }}">
              @error('nombre_echantillon') <p class="text-danger">{{ $message }} @enderror</p>
             </div>
            </div>

            <div class="col-md-6 col-12">
             <div class="form-group">
              <label for="">Longitude</label>
              <input type="number" id="longitude" class="form-control p-4" name="longitude" placeholder="longitude" value="{{ old('longitude') }}">
              @error('longitude') <p class="text-danger">{{ $message }} @enderror</p>
             </div>
            </div>


            <div class="col-md-6 col-12">
             <div class="form-group">
              <label for="	client_id">Selectionner le Client</label>
              <select name="client_id" id="client_id" class="form-control" value="{{ old('client_id') }}">
               <option value="">Selectionner le Client</option>
               @foreach($client as $clients)
               <option value="{{ $clients->id }}">{{ $clients->nom }}</option>
               @endforeach
              </select>
              @error('client_id') <p class="text-danger">{{ $message }} @enderror</p>
             </div>
            </div>


            <div class="col-md-6 col-12">
             <div class="form-group">
              <label for="">Latitude</label>
              <input type="number" id="	latitude" class="form-control p-4" name="latitude" placeholder="latitude" value="{{ old('latitude') }}">
              @error('latitude') <p class="text-danger">{{ $message }} @enderror</p>
             </div>
            </div>


            <div class="col-md-6 col-12">
             <div class="form-group">
              <label for="">Culture</label>
              <input type="text" id="culture" class="form-control p-4" name="culture" placeholder="culture" value="{{ old('culture') }}">
              @error('culture') <p class="text-danger">{{ $message }} @enderror</p>
             </div>
            </div>



            <div class="col-md-6 col-12">
             <div class="form-group">
              <label for="">Antecedents Culturaux </label>
              <input type="text" id="AntecedentsCulturaux	" class="form-control p-4" name="AntecedentsCulturaux" placeholder="Antecedents Culturaux" value="{{ old('AntecedentsCulturaux	') }}">
              @error('AntecedentsCulturaux') <p class="text-danger">{{ $message }} @enderror</p>
             </div>
            </div>

            <div class="col-md-6 col-12">
             <div class="form-group">
              <label for="">Date Reception</label>
              <input type="date" id="DateReception	" class="form-control p-4" name="DateReception" placeholder="" value="{{ old('DateReception') }}">
              @error('DateReception') <p class="text-danger">{{ $message }} @enderror</p>
             </div>
            </div>


            <div class="col-md-6 col-12">
             <div class="form-group">
              <label for="">Livré Par</label>
              <input type="text" id="livrerPar" class="form-control" name="livrerPar" placeholder="livrerPar" value="{{ old('livrerPar') }}">
              @error('livrerPar') <p class="text-danger">{{ $message }} @enderror</p>
             </div>
            </div>

            <div class="col-md-6 col-12">
             <div class="form-group">
              <label for="">Réceptionné Par</label>
              <input type="text" id="receptionerPar" class="form-control p-4" name="receptionerPar" placeholder="receptionerPar" value="{{ old('receptionerPar') }}">
              @error('receptionerPar') <p class="text-danger">{{ $message }} @enderror</p>
             </div>
            </div>



            <div class="col-md-6 col-12">
             <div class="form-group">
              <label for="nature">Analyse Demandées</label>
              <select name="analysedemander_id[]" id="" class="form-control" value="" multiple>
               <option value="">Analyse Demandées</option>
               @foreach($analyse_demander as $ana_de)
               <option value="{{ $ana_de->id }}">{{ $ana_de->nom }}</option>
               @endforeach
              </select>
              @error('analysedemander_id') <p class="text-danger">{{ $message }} @enderror</p>
             </div>
            </div>


            <div class="form-group col-12">
             <fieldset class="checkbox">
              <div class="vs-checkbox-con vs-checkbox-primary">
               <input type="checkbox">
              </div>
             </fieldset>
            </div>
            <div class="col-12">
             <button type="submit" class="btn btn-success mr-1 mb-1">Enregistrer</button>
             <button type="reset" class="btn btn-warning mr-1 mb-1">Annuler</button>
            </div>
           </div>
          </div>
         </form>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- // Basic Floating Label Form section end -->

  </div>
 </div>
</div>
<!-- END: Content-->
@endsection