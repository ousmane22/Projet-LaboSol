<?php

namespace App\Http\Controllers;

use App\Models\Client;
use PDF;
use App\Models\FicheDemande;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\FormFicheDemande;
use App\Models\AnalyseDemander;
use App\Models\AnalyseFiche;

class FicheDemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $analyse_demander = AnalyseDemander::all();
        $client = Client::all();
        return view('fiche.add',compact('client', 'analyse_demander'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormFicheDemande $request)
    {
        $fiche_demande = new FicheDemande();
        $fiche_demande->nombre_echantillon = $request->nombre_echantillon;
        $fiche_demande->client_id = $request->client_id;
        $fiche_demande->longitude = $request->longitude;
        $fiche_demande->latitude = $request->latitude;
        $fiche_demande->culture = $request->culture;
        $fiche_demande->AntecedentsCulturaux = $request->AntecedentsCulturaux;
        $fiche_demande->DateReception = $request->DateReception;
        $fiche_demande->livrerPar = $request->livrerPar;
        $fiche_demande->receptionerPar = $request->receptionerPar;
        $fiche_demande->save();
        
      

        $longueur = count($request->analysedemander_id);

        for ($i = 0; $i < $longueur; $i++) 
        {
                $analyse_fiche = new AnalyseFiche();
                $analyse_fiche->fichedemande_id = $fiche_demande->id;
                $analyse_fiche->analysedemander_id = (int)$request->analysedemander_id[$i];
                $analyse_fiche->save();
                
        }
        Flashy::message('Fiche ajoutée avec success');
        return $this->index();
        
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fiche = FicheDemande::find($id);
        $pdf = PDF::loadView('fiche.filePdf', compact('fiche'));

        return $pdf->stream();

        return view('fiche.filePdf',compact('fiche'));
    }

    public function listFiche()
    {
         $fiche = FicheDemande::with('analysedemande')
        ->orderBy('id', 'DESC')
        ->paginate(10);
        return view('fiche.list',compact('fiche'));

    }

    public function getFiche()
    {
        $fiche = FicheDemande::all();
        return json_encode($fiche);
    }

    public function ResultatParfiche($file)
    {
       
        
        $path = public_path('RESULTATS\\' . $file);
        header('content-type:application');
        return $path;
       
    

    }

    
}
