<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Professor;
use App\Models\Sala;

class ReservarSala extends Model
{
    protected $fillable = [
        'bloco', 'sala', 'reservadoPor', 'inicio', 'fim', 'ehLaboratorio', 'temComputador', 'temDatashow'
    ];

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function salas()
    {
        return $this->hasMany(Sala::class);
    }
}
