<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs= Fournisseur::latest()->paginate(10);

        return view('fournisseurs.index' , compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseur = new Fournisseur();

        return view('fournisseurs.create', compact('fournisseur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $fournisseur = Fournisseur::create($this->validator());

        return Redirect::route('fournisseurs.index')->with('message', 'id-fournisseur '. $fournisseur->id.'. Félicitation, les informations du fournisseur '. $fournisseur->nomfour . ' ont bien été enregistrées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function show(Fournisseur $fournisseur)
    {
        return view('fournisseurs/show', compact('fournisseur'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(Fournisseur $fournisseur)
    {
        return view('fournisseurs/edit',compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fournisseur)
    {
        
        $fournisseur = Fournisseur::find($fournisseur);

        $fournisseur->nomfour = $request->input('nomfour');
        $fournisseur->sitgeofour = $request->input('sitgeofour');
        $fournisseur->contactfour = $request->input('contactfour');

$fournisseur->save();

        return Redirect::route('fournisseurs.index')->with('message', 'id-fournisseur '. $fournisseur->id.'. Félicitation, les informations du fournisseur '. $fournisseur->nomfour .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fournisseur $fournisseur)
    {
        $fournisseur =  Fournisseur::find($fournisseur); 
        $fournisseur->delete();

        return Redirect::route('fournisseurs.index')->with('message', 'id-fournisseur '. $fournisseur->id.'. Félicitation, les informations du fournisseur '. $fournisseur->nomfour .' ont bien été supprimées.');
    }

    private function validator(){

        return request()->validate([
            'nomfour' => ['required', 'string', 'max:255'],
            'contactfour' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'sitgeofour' => ['required', 'string', 'max:255'],
        ]);
    }
}
