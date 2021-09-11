<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appro extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'appros';

    protected $fillable = ['dateappro',
    // 'stock_id',
    // 'client_id',
    'produit_id',
    'fournisseur_id',
    'appro_quantity','montant'];


    public function produit(){
        return $this->belongsTo('App\Models\Produit');
    }

    public function fournisseur(){
        return $this->belongsTo('App\Models\Fournisseur');
    }

    public function stock(){
        return $this->belongsTo('App\Models\Stock');
    }

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }

    public function purchases(){
        return $this->hasMany('App\Models\Purchase');
    }
}