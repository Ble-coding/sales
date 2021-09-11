<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
    use HasFactory;
    protected $table = 'statuts';

    public function achat(){
        return $this->belongsTo('App\Models\Achat');
    }
}
