<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sales';

    protected $fillable = ['nom','nombre',
    'achat_id',
    'date','montant', 'garantie', 'contact','sitgeo', 'livreur'];

    // public function achats(){
    //     return $this->hasMany('App\Models\Achat');
    // }

    public function achat(){
        return $this->belongsTo('App\Models\Achat');
    }

}
