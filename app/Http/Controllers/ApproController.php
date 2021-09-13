<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Stock;
use App\Models\Client;
use App\Models\Appro;
use App\Models\Produit;
use App\Models\Fournisseur;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class ApproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // with('stock')->
        $appros= Appro::with('produit')->with('fournisseur')->latest()->paginate(10);

        return view('appros.index' , compact('appros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $stocks = Stock::all();
        $fournisseurs = Fournisseur::all();
        $produits = Produit::all();
        // $clients = Client::all();
        $appro = new Appro();

        return view('appros.create', compact('appro','fournisseurs','produits'
        // ,'clients'
        // ,'stocks'
    ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $stock = Appro::where([
            ['produit_id', '=', $request->produit_id],
            ['fournisseur_id', '=', $request->fournisseur_id]
        ])->with('produit')->first();
    
        if ($stock) {
            $stock->increment('appro_quantity', $request->appro_quantity);
            // $stock->update(array('dateappro' => $request->dateappro));
        } else {
            Appro::create($this->validator());
        }

        return Redirect::route('appros.index')->with('message', 'Félicitation, les informations de l\'approvisionnement du produit '. $stock['produit']['marque'] . ' '. $stock['produit']['model'] .' ont bien été enregistrées.');
    }

    /**
     * Display the specified resource.
     *
    * @param  int  $appro
     * @return \Illuminate\Http\Response
     */
    public function show(Appro $appro)
    {
        return view('appros/show', compact('appro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $appro
     * @return \Illuminate\Http\Response
     */
    public function edit(Appro $appro)
    {
        // $stocks = Stock::all();
        // $fournisseurs = Fournisseur::all();
        // $produits = Produit::all();
        // $appro = new Appro();


        return view('appros/edit',compact('appro'
        // 'stocks''fournisseurs','produits',
    ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
      * @param  int  $appro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $appro)
    {
        
        $appro = Appro::find($appro);

        $appro->dateappro = $request->input('dateappro');
        $appro->produit_id = $request->input('produit_id');
        // $appro->stock_id = $request->input('stock_id');
        $appro->fournisseur_id = $request->input('fournisseur_id');
        $appro->appro_quantity = $request->input('appro_quantity');
        $appro->montant = $request->input('montant');

$appro->save();

return Redirect::route('appros.index')->with('message', 'id-appro '. $appro->id.'. Félicitation, les informations de l\'approvisionnement du produit '. $appro['produit']['marque'] . ' '. $appro['produit']['model'] .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
       * @param  int  $appro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appro $appro)
    {
        $appro =  Appro::find($appro); 
        $appro->delete();

        return Redirect::route('appros.index')->with('message', 'id-appro '. $appro->id.'. Félicitation, les informations de l\'approvisionnement du produit '. $appro->produit->marque . ' ont bien été supprimées.');
    }

    private function validator(){

        return request()->validate([
            'dateappro' => ['required', 'string'],
            // 'stock_id' => 'required|integer',
            'produit_id' => 'required|integer',
            'fournisseur_id' => 'required|integer',
            // 'client_id' => 'required|integer',
            'appro_quantity' => 'required|integer',
            'montant' => 'required|integer',
        ]);
    }
}
