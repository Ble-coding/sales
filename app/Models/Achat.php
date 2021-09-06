<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Achat extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'achats';

    protected $fillable = ['fournisseur','nombreachat','marqueachat',  'modelachat','dateachat','montantachat', 'garantieachat', 'contactachat','sitgeoachat', 'depot'];

    // public function vente(){
    //     return $this->belongsTo('App\Models\Vente');
    // }

    // public function ventes(){
    //     return $this->hasMany('App\Models\Vente');
    // }

    public function sales(){
        return $this->hasMany('App\Models\Sale');
    }
}
