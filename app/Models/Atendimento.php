<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'data_atendimento', 'medico_id', 'paciente_id'];

    public function Paciente(){
        return $this->belongsTo('App\Models\Paciente');
    }

    public function Medico(){
        return $this->belongsTo('App\Models\Medico');
    }
}
