<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'purchases';

    protected $fillable = ['datepurchase',
    // 'stock_id',
       'appro_id',
    // 'produit_id',
    'client_id','purchase_quantity','montant'];


    public function produit(){
        return $this->belongsTo('App\Models\Produit');
    }

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }

    public function stock(){
        return $this->belongsTo('App\Models\Stock');
    }

    public function appro(){
        return $this->belongsTo('App\Models\Appro');
    }
}
