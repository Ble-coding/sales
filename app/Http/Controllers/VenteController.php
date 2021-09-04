<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vente;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ventes= Vente::latest()->paginate(10);

        return view('ventes.index' , compact('ventes'));
    }


    // public function datesearch()
    // {
    //     $fromDate = $request->input('fromDate');
    //    $toDate = $request->input('toDate');

    //     $ventes= Vente::whereBetween('date', [$fromDate, $toDate])->latest()->paginate(4);

    //     return view('ventes.index' , compact('ventes'));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vente = new Vente();

        return view('ventes.create', compact('vente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vente = Vente::create($this->validator());

        return Redirect::route('ventes.index')->with('message', 'Félicitation, les informations de la vente à '. $vente->nom . ' ont bien été enregistrées.');
        // return Redirect::route('ventes.create');
        // return Redirect::route('ventes.create')->with('message', 'Félicitation, les informations de la vente de '. $vente->nom . ' ont bien été enregistrées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $vente
     * @return \Illuminate\Http\Response
     */
    public function show(Vente $vente)
    {
        return view('ventes/show', compact('vente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $vente
     * @return \Illuminate\Http\Response
     */
    public function edit(Vente $vente)
    {

        return view('ventes/edit',compact('vente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $vente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vente)
    {
        // $vente = new Vente();
        // $vente->nom = $request->input('nom');
        // $vente->livreur = $request->input('livreur');
        // $vente->sitgeo = $request->input('sitgeo');
        // $vente->contact = $request->input('contact');
        // $vente->marque = $request->input('marque');
        // $vente->model = $request->input('model');
        // $vente->date = $request->input('date');
        // $vente->montant = $request->input('montant');
        // $vente->garantie = $request->input('garantie');
        // $vente->save();

        $vente = Vente::find($vente);

        $vente->nom = $request->input('nom');
        $vente->livreur = $request->input('livreur');
        $vente->sitgeo = $request->input('sitgeo');
        $vente->contact = $request->input('contact');
        $vente->marque = $request->input('marque');
        $vente->model = $request->input('model');
        $vente->date = $request->input('date');
        $vente->montant = $request->input('montant');
        $vente->garantie = $request->input('garantie');

$vente->save();

        // $vente->update($this->validator());

        return Redirect::route('ventes.index')->with('message', 'id-client '. $vente->id.'. Félicitation, les informations de la vente de '. $vente->nom .' ont bien été modifiées.');
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

    private function validator(){

        return request()->validate([
            'nom' => ['required', 'string', 'max:255'],
            'livreur' => ['required', 'string', 'max:255'],
            'sitgeo' => ['required', 'string', 'max:255'],
            'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'marque' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'montant' => 'required|string',
            'date' => 'required|string',
            'garantie' => 'required|integer',
        ]);
    }
}
