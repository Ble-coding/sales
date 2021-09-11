<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits= Produit::latest()->paginate(20);
        // latest()->paginate(10)

        return view('produits.index' , compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produit = new Produit();

        return view('produits.create', compact('produit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = Produit::create($this->validator());

        return Redirect::route('produits.index')->with('message', 'id-produit '. $produit->id.'. Félicitation, les informations du produit '. $produit->marque . ' ont bien été enregistrées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return view('produits/show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
      * @param  int  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view('produits/edit',compact('produit'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $produit)
    {
        $produit = Produit::find($produit);

        $produit->model = $request->input('model');
        $produit->marque = $request->input('marque');
        $produit->caractere = $request->input('caractere');

$produit->save();

        // $vente->update($this->validator());

        return Redirect::route('produits.index')->with('message', 'id-produit '. $produit->id.'. Félicitation, les informations du produit '. $produit->marque .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit =  Produit::find($produit); 
        $produit->delete();

        
        return Redirect::route('produits.index')->with('message', 'id-produit '. $produit->id.'. Félicitation, les informations du produit '. $produit->marque .' ont bien été supprimées.');
    }

    private function validator(){

        return request()->validate([
            'marque' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255','unique:produits'],
            'caractere' => ['required', 'string', 'max:255'],
        ]);
    }
}
