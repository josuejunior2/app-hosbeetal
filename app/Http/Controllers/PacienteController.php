<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\PacienteRequest;
use Illuminate\Support\Carbon;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();

        return view('paciente.index', ['pacientes' => $pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PacienteRequest $request)
    {
        $dado = $request->validated();
        $dado['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $request->input('data_nascimento'))->format('Y-m-d');
        $paciente = Paciente::create($dado);

        return redirect()->route('paciente.show', ['paciente' => $paciente]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        dd($paciente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
