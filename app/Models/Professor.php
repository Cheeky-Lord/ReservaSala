<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ReservarSala;

class Professor extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'curso_id'
    ];

    public function reserva()
    {
        return $this->hasMany(ReservarSala::class);
    }
}
