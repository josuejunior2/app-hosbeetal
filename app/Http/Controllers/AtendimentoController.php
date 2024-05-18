<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use App\Models\Paciente;
use App\Models\Medico;
use Illuminate\Http\Request;
use App\Http\Requests\AtendimentoRequest;
use Illuminate\Support\Carbon;

class AtendimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $atendimentos = Atendimento::all();

        return view('atendimento.index', ['atendimentos' => $atendimentos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();

        return view('atendimento.create', ['pacientes' => $pacientes, 'medicos' => $medicos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AtendimentoRequest $request)
    {
        // dd($request->all());
        $dado = $request->validated();
        $dado['data_atendimento'] = Carbon::createFromFormat('d/m/Y', $request->input('data_atendimento'))->format('Y-m-d');
        $atendimento = Atendimento::create($dado);

        return redirect()->route('atendimento.show', ['atendimento' => $atendimento]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Atendimento $atendimento)
    {
        return view('atendimento.show', ['atendimento' => $atendimento]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atendimento $atendimento)
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();

        return view('atendimento.edit', ['atendimento' => $atendimento, 'pacientes' => $pacientes, 'medicos' => $medicos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AtendimentoRequest $request, Atendimento $atendimento)
    {
        $dado = $request->validated();
        $dado['data_atendimento'] = Carbon::createFromFormat('d/m/Y', $request->input('data_atendimento'))->format('Y-m-d');
        $atendimento->update($dado);

        return redirect()->route('atendimento.show', ['atendimento' => $atendimento]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Atendimento $atendimento)
    {
        $atendimento->delete();

        return redirect()->route('atendimento.index');
    }
}
