<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    public $incrementing = false;

    public function parcelles()
    {
        return $this->belongsToMany(Parcelle::class, 'interventions', 'int_par_id');
    }
    public function tarifs()
    {
        return $this->hasMany(Tarif::class);
    }
}
