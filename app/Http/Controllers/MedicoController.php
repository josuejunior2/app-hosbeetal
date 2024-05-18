<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;
use App\Http\Requests\MedicoRequest;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos = Medico::all();


        return view('medico.index', ['medicos' => $medicos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medico.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicoRequest $request)
    {
        $CRM = 'CRM/'.$request->safe()['UF']. ' ' .$request->safe()['numero_crm'];

        try{
            $medico = Medico::create([
                'nome' => $request->safe()['nome'],
                'crm' => $CRM,
                'especialidade' => $request->safe()['especialidade']
            ]);
        } catch(\Exception $e){
            return redirect()->back()->with(['error' => 'Já existe um médico cadastrado com esse CRM ou erro no cadastro, revise os dados e tente novamente.']);
        }

        return redirect()->route('medico.show', ['medico' => $medico]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Medico $medico)
    {
        return view('medico.show', ['medico' => $medico]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medico $medico)
    {
        return view('medico.edit', ['medico' => $medico]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MedicoRequest $request, Medico $medico)
    {
        $CRM = 'CRM/'.$request->safe()['UF']. ' ' .$request->safe()['numero_crm'];

        try{
            $medico->update([
                'nome' => $request->safe()['nome'],
                'crm' => $CRM,
                'especialidade' => $request->safe()['especialidade']
            ]);
        } catch(\Exception $e){
            return redirect()->back()->with(['error' => 'Já existe um médico cadastrado com esse CRM ou erro no cadastro, revise os dados e tente novamente.']);
        }

        return redirect()->route('medico.show', ['medico' => $medico]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medico $medico)
    {
        $medico->delete();

        return redirect()->route('medico.index');

    }
}
