<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'stocks';

    protected $fillable = ['libelle','position'];


    public function appros(){
        return $this->hasMany('App\Models\Appro');
    }

    public function purchases(){
        return $this->hasMany('App\Models\Purchase');
    }
}

