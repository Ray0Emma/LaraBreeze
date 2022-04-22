<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;
    public $incrementing = false;
    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
}
