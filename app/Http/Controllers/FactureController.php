<?php

namespace App\Http\Controllers;

use NumberToWords\NumberToWords;
use App\Models\Prix;
use App\Models\Client;
use PDF;
use App\Models\TypeClient;
use App\Models\FicheDemande;
use Illuminate\Http\Request;
use App\Models\AnalyseDemander;
use NumberFormatter;

class FactureController extends Controller
{
    public function getFacture()
    {
        $fiche = FicheDemande::orderBy('id','DESC')
        ->paginate(8);
        return view('facture.facture',compact('fiche'));
    }

    public function GenererFacture($id)
    {
        $fiche = FicheDemande::findOrFail($id)
        ->with('analysedemande')
        ->where('id',$id)
        ->get();   

       
        //Recuperer l'ensemble Analyse demanders 
        $analyse = AnalyseDemander::count();
        

        $pdf = PDF::loadView('facture.proforma', compact('fiche','analyse'));
        return $pdf->stream();


    }

    public function factureDefinitive($id)
    {
        $fiche = FicheDemande::findOrFail($id)
            ->with('analysedemande')
            ->where('id', $id)
            ->get();

        //Recuperer l'ensemble Analyse demanders 
        $analyse = AnalyseDemander::count();


        $pdf = PDF::loadView('facture.definitive', compact('fiche', 'analyse'));
        return $pdf->stream();
    }


    
        
}
