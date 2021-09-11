<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks= Stock::latest()->paginate(10);

        return view('stocks.index' , compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stock = new stock();

        return view('stocks.create', compact('stock'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        $stock = Stock::create($this->validator());

        return Redirect::route('stocks.index')->with('message', 'id-stock '. $stock->id.'. Félicitation, les informations du stock '. $stock->libelle . ' ont bien été enregistrées.');
    }

    /**
     * Display the specified resource.
     *
      * @param  int  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        return view('stocks/show', compact('stock'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        return view('stocks/edit',compact('stock'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $stock)
    {
        
        $stock = Stock::find($stock);

        $stock->libelle = $request->input('libelle');
        $stock->position = $request->input('position');

$stock->save();

        return Redirect::route('stocks.index')->with('message', 'id-stock '. $stock->id.'. Félicitation, les informations du stock '. $stock->libelle .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
    * @param  int  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        $stock =  Stock::find($stock); 
        $stock->delete();

        return Redirect::route('stocks.index')->with('message', 'id-stock '. $stock->id.'. Félicitation, les informations du stock '. $stock->libelle .' ont bien été supprimées.');
    }

    private function validator(){

        return request()->validate([
            'libelle' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            // 'quantity' => ['required', 'integer'],
        ]);
    }
}
