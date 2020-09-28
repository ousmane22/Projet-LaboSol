<?php

namespace App\Http\Controllers;

use App\Models\Resultat;
use App\Models\FicheDemande;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Storage;

class ResultatController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        //Attribuer des fiches d'analyes aux fiche de demandes
        $fiche =  FicheDemande::find($id);
        return view('resultat.add', compact('fiche'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'NOMFICHE' => 'required',
            'extension' => $request->NOMFICHE->extension(),
            'fichedemande_id' => 'required',

        ]);

        $file = $request->NOMFICHE;
        $fileName = time() . '.' . $request->NOMFICHE->extension();
        $path = $request->NOMFICHE->move(public_path('RESULTATS'), $fileName);
        $name = $file->getClientOriginalName();
        $nameOnly = $name = explode('.', $name)[0];

        $resultat = new Resultat();
        $resultat->NOMFICHE = $nameOnly;
        $resultat->File = $fileName;
        $resultat->fichedemande_id = request('fichedemande_id');
        $resultat->save();

        return redirect()->route('list.fiche')->with('success', 'Fiche Résultat ajoutée ');
        Flashy::message('Fiche Résultat ajoutée avec success');
    }
}
