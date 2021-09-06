<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vente;
use Carbon\Carbon;
use App\Models\Sale;
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



        //sales

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

        $sumMontant = DB::table('sales')->sum('montant');
        $count = DB::table('sales')->whereBetween('date', [$startDay, $endDay])->count('id');
        $ventes= Sale::with('achat')->latest()->paginate(5);
        $sumDay = DB::table('sales')->whereBetween('date', [$startDay, $endDay])->sum('montant');
        $sumPreviousMonth = DB::table('sales')->whereBetween('date', [$startPreviousMonth, $endPreviousMonth])->sum('montant');
        $sumCurrentMonth = DB::table('sales')->whereBetween('date', [$start, $end])->sum('montant');
        return view('home' , compact('ventes', 'sumMontant','count','sumDay', 'sumPreviousMonth', 'sumCurrentMonth'));
        // return view('home');

    }
}
