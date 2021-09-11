<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produit extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'produits';

    protected $fillable = ['marque','model','caractere'];


    public function purchases(){
        return $this->hasMany('App\Models\Purchase');
    }
    public function appros(){
        return $this->hasMany('App\Models\Appro');
    }
}
