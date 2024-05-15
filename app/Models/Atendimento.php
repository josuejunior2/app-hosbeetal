<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Atendimento extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['id', 'data_atendimento', 'medico_id', 'paciente_id'];

}
