<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'ventes';

    protected $fillable = ['nom', 'marque',  'model','date','montant', 'garantie', 'contact','sitgeo', 'livreur'];
}
