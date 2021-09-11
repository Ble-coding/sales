<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Appro;
// use App\Models\Stock;
use App\Models\Produit;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // with('stock')->
        $purchases= Purchase::with('appro')->with('produit')->with('client')->latest()->paginate(10);

        return view('purchases.index' , compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $stocks = Stock::all();
        $appros = Appro::all();
        $clients = Client::all();
        // $client = Client::all();
        $produits = Produit::all();
        // $purchase = Purchase::with('produit','client','appro')->get();
        $purchase = new Purchase();
        // $client = new Client();

        return view('purchases.create', compact('purchase','clients','produits'
         ,'appros'
        //  ,'client'
        // ,'stocks'
    ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Appro $apport, Client $client)
    {   
      
        $purchases = new Purchase;
        $purchases->datepurchase = $request->input('datepurchase');
        $purchases->client_id = $request->input('client_id');
        // $purchases->purchase_quantity = $request->input('purchase_quantity');
        $purchases->montant = $request->input('montant');

        // $produts = $request->input('produit_id');
        $produts = $request->input('appro_id');
        
      
        // $purchases = $request->input('produit_id');
 
        $purchases->appro_id = $produts; 
        // $purchases->fournisseur_id = $request->input('fournisseur_id');
        // $purchases->appro_id = $request->input('appro_id');
    

        $apport = Appro::findOrFail($produts);
        // $purchases->produit_id = $apport->produit_id;
        // $purchases->appro_id = $apport->id;
        $purchases->purchase_quantity = $request->input('purchase_quantity');
        $apport->decrement('appro_quantity', $purchases->purchase_quantity);

        // $cli->client_id = $fournisseur->id;
        // $purchases->client_id = $client->id;
        // $client->purchases()->save($purchases);
        // if($request->input('purchase_quantity') <= $apport->appro_quantity){
        //     $apport->decrement('appro_quantity', $purchases->purchase_quantity);

        // }else{
        //     return view('404' , compact('produts'));
        // }

        // $stock = Stock::findOrFail($materials);
        // $tasks->materials = $stock->product_name;
        // $tasks->quantity = $request->input('quantity');
        // $stock->decrement('quantity', $tasks->quantity);


    //  $purchase->save();
        $purchases->save();
            // dd($decrease);
        return Redirect::route('purchases.index')->with('message', 'Félicitation, les informations de la vente du produit ont bien été enregistrées.');
        // '. $stock->produit[0]['marque'] . ' ' . $stock->produit[1]['model'] . '
    }

    /**
     * Display the specified resource.
     *
    * @param  int  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        return view('purchases/show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
    * @param  int  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        // $stocks = Stock::all();
         $appros = Appro::all();
        $clients = Client::all();
        $produits = Produit::all();

        return view('purchases/edit', compact('clients','produits','appros','purchase'
        // ,'stocks'
    ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $purchase)
    {
        $purchase = Purchase::find($purchase);

        $purchase->datepurchase = $request->input('datepurchase');
        // $purchase = $request->input('produit_id');
        $purchase = $request->input('appro_id');
        $purchase->client_id = $request->input('client_id');
        // $purchase->purchase_quantity = $request->input('purchase_quantity');
        // $purchase->montant = $request->input('montant');
        // $purchase->appro_id = $produts; 
 
        // $apport = Appro::findOrFail($produts);
        // $purchase->produit_id = $apport->fournisseur_id;
        // $purchase->purchase_quantity = $request->input('purchase_quantity');
        // $apport->decrement('appro_quantity', $purchase->purchase_quantity);

        $purchase->save();

        // dd( $request->input('produit_id'));

return Redirect::route('purchases.index')->with('message','Félicitation, les informations de la vente du produit ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
        * @param  int  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        $purchase = Purchase::find($purchase); 
        $purchase->delete();

        return Redirect::route('purchases.index')->with('message','Félicitation, les informations de la vent du produit ont bien été supprimées.');
    }


    private function validator(){

        return request()->validate([
            'datepurchase' => ['required', 'string'],
            // 'stock_id' => 'required|integer',
            'appro_id' => 'required|integer',
            // 'produit_id' => 'required|integer',
            'client_id' => 'required|integer',
            'montant' => 'required|integer',
            'purchase_quantity' => ['required', 'integer'],
        ]);
    }

    
}
