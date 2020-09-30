<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Echantillon;
use App\Models\FicheDemande;
use Illuminate\Http\Request;
use App\Models\TypeEchantillon;
use Illuminate\Support\Carbon;
use MercurySeries\Flashy\Flashy;
use PhpParser\Node\Stmt\Return_;

class EchantillonController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $type = TypeEchantillon::all();
        $client = Client::all();
        $fiche = FicheDemande::all();
        return view('echantillon.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'designation' => 'required',
                'date' => 'required|date',
                'client_id' => 'required',
                'fichedemande_id' => 'required',
                'type_echantillon_id' => 'required',

            ],

            [
                'designation.required' => 'Veuillez saisir la désignation',
                'date.required' => 'Veuillez saisir la date',
                'client_id.required' => 'Veuillez selectionner le client',
                'fichedemande_id.required' => 'champ requis',
                'type_echantillon_id.required' => 'champ requis',

            ]
        );

        $echantillon =   Echantillon::create($data);
        $echantillon->save();
        Flashy::message('Echantillon ajouté avec success', 'http://127.0.0.1:8000/echantillon.add');
        return response()->json($echantillon);
    }


    public function list()
    {
        Carbon::setLocale('fr');
        $echantillon = Echantillon::with('typeechantillon')
        ->paginate(8);
        return view('echantillon.list', compact('echantillon'));
      

    }

    
}
