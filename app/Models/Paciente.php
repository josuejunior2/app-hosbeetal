<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Paciente extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['id', 'nome', 'cpf', 'data_nascimento', 'email'];

    public function atendimentos(){
        return $this->hasMany('App\Models\Atendimento');
    }
}
