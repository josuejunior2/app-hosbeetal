@extends('layouts.app')

@include('paciente.modal.alert-destroy')
@section('content')

<div class="card m-3">
    <div class="card-header justify-content-between">
        <h3 class="card-title">Cadastro do Paciente</h3>
        <div class="d-flex justify-content-between col-auto">
            <div>
                <a href=" {{ route('paciente.edit', ['paciente' => $paciente]) }}" class="btn me-2 btn-secondary w-80">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                    Editar
                </a>
            </div>
            <form id="form_{{$paciente->id}}" method="post" action="{{ route('paciente.destroy', ['paciente' => $paciente]) }}">
                @method('DELETE')
                @csrf
                <!-- <button type="submit">Excluir</button>  -->
                <a href="#" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#modal-destroy-paciente">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                    Excluir cadastro
                </a>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="datagrid">
        <div class="datagrid-item">
            <div class="datagrid-title">Nome</div>
            <div class="datagrid-content">{{ $paciente->nome }}</div>
        </div>
        <div class="datagrid-item">
            <div class="datagrid-title">Cadastro de Pessoa Física (CPF)</div>
            <div class="datagrid-content">{{ $paciente->cpf }}</div>
        </div>
        <div class="datagrid-item">
            <div class="datagrid-title">Data de nascimento</div>
            <div class="datagrid-content">{{ \Carbon\Carbon::parse($paciente->data_nascimento)->format('d/m/Y') }}</div>
        </div>
        <div class="datagrid-item">
            <div class="datagrid-title">Email</div>
            <div class="datagrid-content">{{ $paciente->email }}</div>
        </div>
    </div>
</div>

<div class="card m-3">
    <div class="card-header justify-content-between">
        <h3 class="card-title">Atendimentos</h3>
    </div>
    <div class="card-body">
        <div class="accordion" id="accordion">
            @if ($paciente->atendimentos->isEmpty())
                <p>Esse paciente ainda não agendou nenhum atendimento, <a href="{{ route('atendimento.create') }}">clique aqui para agendar</a>.</p>
            @endif
            @foreach ($paciente->atendimentos->sortByDesc('created_at') as $key => $atendimento) {{-- ->sortBy('nome')--}}
                <div class="accordion-item m-3">
                    <div class="d-flex justify-content-between" id="heading-1">
                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-{{ $atendimento->id }}" aria-expanded="true">
                            ({{ $atendimento->id }}) Dr. {{ $atendimento->Medico->nome }}
                        </button>
                    </div>
                    <div id="accordion-collapse-{{ $atendimento->id }}" class="accordion-collapse collapse" data-bs-parent="#accordion-{{ $atendimento->id }}">
                        <div class="accordion-body pt-0">
                            <div class="datagrid">
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Data do atendimento</div>
                                    <div class="datagrid-content">{{ \Carbon\Carbon::parse($atendimento->data_atendimento)->format('d/m/Y') }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Nome do Médico</div>
                                    <div class="datagrid-content">{{ $atendimento->Medico->nome }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Especialidade do Médico</div>
                                    <div class="datagrid-content">{{ $atendimento->Medico->especialidade }}</div>
                                </div>
                                <div class="datagrid-item">
                                    <a class="btn justify-content-center" href="{{ route('atendimento.show', ['atendimento' => $atendimento]) }}">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                        Visualizar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
