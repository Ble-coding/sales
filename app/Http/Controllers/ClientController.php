<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients= Client::latest()->paginate(10);

        return view('clients.index' , compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();

        return view('clients.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = Client::create($this->validator());

        return Redirect::route('clients.index')->with('message', 'id-client '. $client->id.'. Félicitation, les informations du client '. $client->nomcli . ' ont bien été enregistrées.');
    }

    /**
     * Display the specified resource.
     *
      * @param  int  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients/show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
    * @param  int  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients/edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
      * @param  int  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $client)
    {
        $client = Client::find($client);

        $client->nomcli = $request->input('nomcli');
        $client->contactcli = $request->input('contactcli');
        $client->sitgeocli = $request->input('sitgeocli');

$client->save();

        // $vente->update($this->validator());

        return Redirect::route('clients.index')->with('message', 'id-client '. $client->id.'. Félicitation, les informations du client '. $client->nomcli .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
      * @param  int  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client =  Client::find($client); 
        $client->delete();

        
        return Redirect::route('clients.index')->with('message', 'id-client '. $client->id.'. Félicitation, les informations du client '. $client->nomcli .' ont bien été supprimées.');
    }

    private function validator(){

        return request()->validate([
            'nomcli' => ['required', 'string', 'max:255'],
            'sitgeocli' => ['required', 'string', 'max:255'],
            'contactcli' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:clients',
        ]);
    }
}
