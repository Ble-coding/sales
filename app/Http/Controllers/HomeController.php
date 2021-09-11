<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vente;
use Carbon\Carbon;
use App\Models\Sale;
use App\Models\Client;
use App\Models\Purchase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // // $startDay = Carbon::now()->startOfMonth();
        // // $endDay = Carbon::now()->endOfMonth(); 

        // $startDay = Carbon::now()->toDateString();
        // $endDay = Carbon::now()->toDateString(); 

        // $startPreviousMonth = Carbon::now()->startOfMonth()->subMonthsNoOverflow()->toDateString();
        // $endPreviousMonth = Carbon::now()->subMonthsNoOverflow()->endOfMonth()->toDateString();

        // // $start = Carbon::now()->startOfMonth();
        // // $end = Carbon::now();

        // $start = Carbon::now()->startOfMonth()->toDateString();
        // $end = Carbon::now()->endOfMonth()->toDateString();

        // // dd($Month);

        // $sumMontant = DB::table('ventes')->sum('montant');
        // $count = DB::table('ventes')->whereBetween('date', [$startDay, $endDay])->count('id');
        // $ventes= Vente::latest()->paginate(5);
        // $sumDay = DB::table('ventes')->whereBetween('date', [$startDay, $endDay])->sum('montant');
        // $sumPreviousMonth = DB::table('ventes')->whereBetween('date', [$startPreviousMonth, $endPreviousMonth])->sum('montant');
        // $sumCurrentMonth = DB::table('ventes')->whereBetween('date', [$start, $end])->sum('montant');
        // return view('home' , compact('ventes', 'sumMontant','count','sumDay', 'sumPreviousMonth', 'sumCurrentMonth'));
        // // return view('home');

   

        //purchases

          // $startDay = Carbon::now()->startOfMonth();
        // $endDay = Carbon::now()->endOfMonth(); 

        $startDay = Carbon::now()->toDateString();
        $endDay = Carbon::now()->toDateString(); 

        $startPreviousMonth = Carbon::now()->startOfMonth()->subMonthsNoOverflow()->toDateString();
        $endPreviousMonth = Carbon::now()->subMonthsNoOverflow()->endOfMonth()->toDateString();

        // $start = Carbon::now()->startOfMonth();
        // $end = Carbon::now();

        $start = Carbon::now()->startOfMonth()->toDateString();
        $end = Carbon::now()->endOfMonth()->toDateString();

        // dd($Month);

        $sumMontant = DB::table('purchases')->sum('montant');
        $count = DB::table('purchases')->whereBetween('datepurchase', [$startDay, $endDay])->count('id');
        $purchases= Purchase::with('produit')->with('appro')->with('client')->latest()->paginate(5);
        $sumDay = DB::table('purchases')->whereBetween('datepurchase', [$startDay, $endDay])->sum('montant');
        $sumPreviousMonth = DB::table('purchases')->whereBetween('datepurchase', [$startPreviousMonth, $endPreviousMonth])->sum('montant');
        $sumCurrentMonth = DB::table('purchases')->whereBetween('datepurchase', [$start, $end])->sum('montant');
        return view('home' , compact('purchases','sumMontant','count','sumDay', 'sumPreviousMonth', 'sumCurrentMonth'));
        // // return view('home');

    }
    public function store(Request $request)
    {
        $client = Client::create($this->validator());

        return Redirect::route('purchases.create')->with('message', 'id-client '. $client->id.'. Félicitation, les informations du client '. $client->nomcli . ' ont bien été enregistrées.');
    }


    private function validator(){

        return request()->validate([
            'nomcli' => ['required', 'string', 'max:255'],
            'sitgeocli' => ['required', 'string', 'max:255'],
            'contactcli' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:clients',
        ]);
    }
}
