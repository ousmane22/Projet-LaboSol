<?php

namespace App\Http\Controllers;

use App\Models\Prix;
use App\Models\Client;
use PDF;
use App\Models\TypeClient;
use App\Models\FicheDemande;
use Illuminate\Http\Request;
use App\Models\AnalyseDemander;

class FactureController extends Controller
{
    public function getFacture()
    {
        $fiche = FicheDemande::all();
        return view('facture.facture',compact('fiche'));
    }

    public function GenererFacture($id)
    {
        $fiche = FicheDemande::findOrFail($id)
        ->where('id',$id)
        ->with('echantillon', 'analysedemande','client')
        ->get();
        
        $prix = TypeClient::with('prix')
        ->get();


        $pdf = PDF::loadView('facture.proforma', compact('fiche'));
        return $pdf->stream();
        return view('facture.proforma',compact('fiche','prix'));
    }


        
}
