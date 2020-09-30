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
      <h2 class="content-header-title float-left mb-0 text-success pb-2">Ajouter une nouvelle analyse</h2>

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
         <form class="form" action="{{  route('addAnalyse') }}" method="POST">
          @csrf
          <div class="form-body">


           <div class="form-group">
            <label for="nom">Nom Analyse</label>
            <input type="text" id="p" class="form-control" placeholder="" name="nom" value="{{ old('nom') }}">
            @error('nom') <p class="text-danger">{{ $message }} @enderror</p>
           </div>



           <div class="form-group">
            <label for="">PRIX INTERNE</label>
            <input type="number" id="prix_interne" class="form-control" name="prix_interne" value="{{ old('prix_interne') }}">
            @error('prix_interne') <p class="text-danger">{{ $message }} @enderror</p>
           </div>

           <div class="form-group">
            <label for="">PRIX EXTERNE</label>
            <input type="number" id="prix_externe" class="form-control" name="prix_externe" value="{{ old('prix_externe') }}">
            @error('prix_externe') <p class="text-danger">{{ $message }} @enderror</p>
           </div>



           <div class="form-group col-12">
            <fieldset class="checkbox">
             <div class="vs-checkbox-con vs-checkbox-primary">
              <input type="checkbox">
             </div>
            </fieldset>
           </div>
           <div class="col-12">
            <button type="submit" class="btn btn-success mr-1 mb-1 block">Ajouter</button>
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