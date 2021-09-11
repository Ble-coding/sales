<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achats= Achat::latest()->paginate(10);

        return view('achats.index' , compact('achats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $achat = new Achat();

        return view('achats.create', compact('achat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           $achat = Achat::create($this->validator());
   

          return Redirect::route('achats.index')->with('message', 'id-fournisseur '. $achat->id.'. Félicitation, les informations du produit achété à '. $achat->fournisseur . ' ont bien été enregistrées.');
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
     * @param  int  $achat
     * @return \Illuminate\Http\Response
     */
    public function edit(Achat $achat)
    {
        
        return view('achats/edit',compact('achat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $achat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $achat)
    {
        $achat = Achat::find($achat);

        $achat->fournisseur = $request->input('fournisseur');
        $achat->depot = $request->input('depot');
        $achat->sitgeoachat = $request->input('sitgeoachat');
        $achat->contactachat = $request->input('contactachat');
        $achat->marqueachat = $request->input('marqueachat');
        $achat->modelachat = $request->input('modelachat');
        $achat->dateachat = $request->input('dateachat');
        $achat->montantachat = $request->input('montantachat');
        $achat->nombreachat = $request->input('nombreachat');
        $achat->status = $request->input('status');

$achat->save();

        

        return Redirect::route('achats.index')->with('message', 'id-fournisseur '. $achat->id.'. Félicitation, les informations du produit achété à '. $achat->fournisseur .' ont bien été modifiées.');
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
            'fournisseur' => ['required', 'string', 'max:255'],
            'depot' => ['required', 'string', 'max:255'],
            'sitgeoachat' => ['required', 'string', 'max:255'],
            'contactachat' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'marqueachat' => ['required', 'string', 'max:255'],
            'modelachat' => ['required', 'string', 'max:255'],
            'montantachat' => 'required|integer',
            'dateachat' => 'required|string',
            'status' => 'required|integer',
            'garantieachat' => 'required|integer',
            'nombreachat' => 'required|integer',
        ]);
    }
}
