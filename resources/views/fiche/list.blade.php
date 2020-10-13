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
                                <th>NUMERO Fiche</th>
                                <th>NOMBRE ECHANTILLONS</th>
                                <th>CLIENT</th>
                                <th>Date</th>
                                <th>Voir Fiche</th>
                                <th>Enregister Fiche résultat</th>
                                <th>Voir Fiche résultat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fiche as $fiches)
                            <tr>
                                <td style="text-align:center;">
                                    <h5>{{ $fiches->id }}</h5>
                                </td>
                                <td class="product-category">
                                    <h5>{{ $fiches->nombre_echantillon }}</h5>
                                </td>
                                <td class="product-category">
                                    <h5>{{ $fiches->client->nom }}</h5>
                                </td>
                                <td class="product-category">
                                    <h5>{{ date('d/m/Y',strtotime($fiches->DateReception)) }}</h5>
                                </td>
                                <td class="product-action">
                                    <a href="{{ route('show.fiche',$fiches->id) }}"><i class="feather icon-printer fa-2x"></i></a>
                                </td>
                                <td>
                                    <a href="{{ route ('giveResult',$fiches->id) }}" class="btn btn-success">Donner la Fiche résultat</a>
                                </td>

                                <td>
                                    @foreach($fiches->resultat as $result)
                                    <a href="{{ asset('RESULTATS/'.$result->File) }}" class="btn btn-warning">Voir la Fiche résultat</a>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        {{ $fiche->links() }}
                    </table>
                    {{ $fiche->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Basic Tables end -->

<script src="//code.jquery.com/jquery.js"></script>
@include('flashy::message')
@stop