<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Vente;
use App\Models\Achat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales= Sale::latest()->paginate(10);

        return view('sales.index' , compact('sales'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $achats = Achat::all();

        $sale = new sale();

        return view('sales.create', compact('sale', 'achats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Sale $sale)
    {
        $achat = Achat::select('nombreachat')->get();
        // $achat = Achat::select('nombreachat')->where('id', $sale)->get();

       
        if($achat >= $request->nombre){
            $sale = Sale::create($this->validator());

            // if ($achat[0]->nombreachat  - $request->input('nombre')){
            //         $stock = 'en stock';
            // }elseif($achat->nombreachat = $request->input('nombre')){
            //     $rupture = 'en rupture';
            // }
										
        } else{
            return "Impossible la BD est vide";
        }

        dd($achat);


        // $v = Achat::select('nombreachat')->where('id', $sale)->get();
        // $vc = $v->count();
 
 
        // if($vc == 0 && $achat >= $request->nombre){
        //     // $sale = Sale::create($this->validator());
        // }
        // else{
        //  //    dd($v[0]->initial);
 
     
        //  $ver = [];
        //  foreach ((array) $v as $item) {
 
        //    $ver =  $v[0]->nombreachat - $request->input('nombre');
        //      }
        //     }

        //     dd($v);
 
    
        return Redirect::route('sales.index')->with('message', 'id-client '. $sale->id.'. Félicitation, les informations du produit vendu à M.'. $sale->nom . ' ont bien été enregistrées.');
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
     * @param  int  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        $achats = Achat::all();
        return view('sales/edit',compact('sale','achats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sale)
    {
        $sale = Sale::find($sale);

        $sale->nom = $request->input('nom');
        $sale->livreur = $request->input('livreur');
        $sale->sitgeo = $request->input('sitgeo');
        $sale->contact = $request->input('contact');
        $sale->achat_id = $request->input('achat_id');
        $sale->date = $request->input('date');
        $sale->montant = $request->input('montant');
        $sale->nombre = $request->input('nombre');

$sale->save();

        // $sale->update($this->validator());

        return Redirect::route('sales.index')->with('message', 'id-client '. $sale->id.'. Félicitation, les informations du produit vendu à M.'. $sale->nom .' ont bien été modifiées.');
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
            'montant' => 'required|integer',
            'date' => 'required|string',
            'garantie' => 'required|integer',
            'nombre' => 'required|integer',
            'achat_id' => 'required|integer',
        ]);
    }
}
