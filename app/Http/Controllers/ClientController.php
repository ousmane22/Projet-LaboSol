<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\TypeClient;
use Dotenv\Result\Result;
use App\Models\DetailClient;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\FormClient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class ClientController extends Controller
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
        $type_client = TypeClient::all();
        return view('client.add', compact('type_client'));
    }

    public function rechercherClient()
    {
      
        $search = request()->input('recherche');
        $client = Client::where('nom', 'like', '%' .$search.'%')
        ->orWhere('adresse', 'like', '%' . $search . '%')
        ->with('detailType')
        ->paginate(5);
        
        return view('client.rechercherClient',['client' => $client]);
        
    }

    public function getClient()
    {
        $client = Client::all();
        return json_encode($client);
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

    public function getDetailsTypeClient($id)
    {
        
        $details = DetailClient::where('type_client_id',$id)
        ->get();
        return response()->json($details);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormClient $request)
    {
        
        Client::create([
            'nom' => $request->nom,
            'telephone' => $request->telephone,   
            'email' => $request->email,
            'adresse' => $request->adresse,
            'type_id' => $request->type_id,
            'detail_client_id' => $request->detail_client_id,
        ]);
        Flashy::message('Client ajouté avec success', 'http://127.0.0.1:8000/add');
        return $this->index();
    }

    public function listClient()
    {
        
        $client = Client::with('detailType')
        ->orderBy('id','DESC')
        ->paginate(10);
       
        return view('client.list',compact('client'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
