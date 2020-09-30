<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnalyseDemander;
use App\Models\Prix;
use MercurySeries\Flashy\Flashy;

class AnalysePrixController extends Controller
{
    public function ListAnalysePrix()
    {
        return view('analyse.list');
    }

    public function addAnalyse(Request $request)
    {
        $data = $request->validate(
            [
            'nom' => 'required|unique:analyse_demanders',
                'prix_interne' => 'required',
                'prix_externe' => 'required',
            ],
            [
                'nom.unique' => 'Analyse déja enregistrée',
                'nom.required' => 'Ce champ ne doit pas être vide',
                'prix_interne.required' => 'Ce champ ne doit pas être vide',
                'prix_externe.required' => 'Ce champ ne doit pas être vide',

            ]
        );

     

        //enregistrement de l'analyse
        $analyse =   new AnalyseDemander();
        $analyse->nom = request('nom');
        $analyse->save();

      
        //enregistrement des analyses et des prix 
        $prix = new Prix();
        $prix->analysedemander_id = $analyse->id;
        $prix->prix_interne = request('prix_interne');
        $prix->prix_externe = request('prix_externe');
        $prix->save();
        Flashy::message('Analyse ajoutée avec success', 'http://127.0.0.1:8000/listAnalyse');
        return redirect()->route('listAnalyse');
    }


    public function getListAnalysePrix()
    {
        $analysePrix =  AnalyseDemander::with('prix')
        ->orderBy('id','DESC')
        ->paginate(6);
        return view('analyse.listAnalysePrix',compact('analysePrix'));
    }
}
