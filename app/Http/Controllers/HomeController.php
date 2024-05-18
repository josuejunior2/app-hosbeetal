<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atendimento;
use App\Models\Paciente;
use App\Models\Medico;

class HomeController extends Controller
{
    public function index(){
        $atendimentos = Atendimento::all();
        $pacientes = Paciente::all();
        $medicos = Medico::all();

        return view('home', ['atendimentos' => $atendimentos, 'medicos' => $medicos, 'pacientes' => $pacientes]);
    }
}
