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
                        <h2 class="content-header-title float-left mb-0 text-success pb-2">Enregister un nouveau client</h2>

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
                                    <form class="form" action="{{  route('add.client') }}" method="POST">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="nom">NOM</label>
                                                        <input type="text" id="nom" class="form-control p-4" placeholder="nom" name="nom" value="{{ old('nom') }}">
                                                        @error('nom') <p class="text-danger">{{ $message }} @enderror</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="telephone">Telephone</label>
                                                        <input type="number" id="telephone" class="form-control p-4" placeholder="telephone" name="telephone" value="{{ old('telephone') }}">
                                                        @error('telephone') <p class="text-danger">{{ $message }} @enderror</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" id="email" class="form-control p-4" placeholder="email" name="email" value="{{ old('email') }}">
                                                        @error('email') <p class="text-danger">{{ $message }} @enderror</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="country-floating">Adresse</label>
                                                        <input type="text" id="adresse" class="form-control p-4" name="adresse" placeholder="adresse" value="{{ old('adresse') }}">
                                                        @error('adresse') <p class="text-danger">{{ $message }} @enderror</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="company-column">Type Client</label>
                                                        <select name="type_id" id="type_id" class="form-control p-4" value="{{ old('type_id') }}">
                                                            <option value="">Choisir le type du client</option>
                                                            @foreach($type_client as $typeclients)
                                                            <option value="{{ $typeclients->id }}">{{ $typeclients->type }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('type_id') <p class="text-danger">{{ $message }} @enderror</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="detail">Details Type Client</label>
                                                        <select name="detail_client_id" id="detail_client_id" class="form-control p-4" value="{{ old('detailsType') }}">
                                                            <option value="" disabled="disabled">Détails type du client</option>
                                                        </select>
                                                        @error('detail_client_id') <p class="text-danger">{{ $message }} @enderror</p>
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


<script src="{{ asset('js/jquery.js') }}"></script>
<script>
    $('document').ready(function() {
        $('select[name = "type_id"]').change(function() {
            var type = $(this).val();
            if (type) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/getDetails/" + type,
                    Type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('select[name="detail_client_id"]').show();
                        var select = $('select[name="detail_client_id"]');

                        select.empty();

                        $.each(data, function(key, value) {
                            select.append('<option value="' + value.id + '">' + value.details + '</option>');
                        });

                    }

                });
            } else {
                $('select[name="detail_client_id"]').hide();
            }
        });
    });
</script>
@endsection