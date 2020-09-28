<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Echantillon;
use App\Models\FicheDemande;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function getStatistique()

    {
        $client = Client::all();
        $echantillon =  Echantillon::all();
        $fiche = FicheDemande::all();
        return view('acceuil',compact('client','fiche','echantillon'));
    }
}
