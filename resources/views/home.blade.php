@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Home
                    </div>
                    <h2 class="page-title">
                        <h1>HosBEEtal</h1>
                    </h2>
                </div>
            </div>
        </div>
    </div>
<div class="page-body d-flex flex-column align-items-center">
    <div class="container-xl m-3">
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="row row-cards justify-content-center d-flex">
                    <div class="col-md-6 col-xl-3">
                        <a class="card card-link" href="{{ route('medico.index') }}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-medical-cross">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M13 3a1 1 0 0 1 1 1v4.535l3.928 -2.267a1 1 0 0 1 1.366 .366l1 1.732a1 1 0 0 1 -.366 1.366l-3.927 2.268l3.927 2.269a1 1 0 0 1 .366 1.366l-1 1.732a1 1 0 0 1 -1.366 .366l-3.928 -2.269v4.536a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-4.536l-3.928 2.268a1 1 0 0 1 -1.366 -.366l-1 -1.732a1 1 0 0 1 .366 -1.366l3.927 -2.268l-3.927 -2.268a1 1 0 0 1 -.366 -1.366l1 -1.732a1 1 0 0 1 1.366 -.366l3.928 2.267v-4.535a1 1 0 0 1 1 -1h2z" />
                                        </svg>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">Medicos</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a class="card card-link" href="{{ route('paciente.index') }}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-heart-handshake" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                            <path
                                                d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25" />
                                            <path d="M12.5 15.5l2 2" />
                                            <path d="M15 13l2 2" />
                                        </svg>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">Pacientes</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a class="card card-link" href="{{ route('atendimento.index') }}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-clock">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10.5 21h-4.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v3" />
                                            <path d="M16 3v4" />
                                            <path d="M8 3v4" />
                                            <path d="M4 11h10" />
                                            <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            <path d="M18 16.5v1.5l.5 .5" />
                                        </svg>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">Atendimentos</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl m-3">
        <div class="row row-deck row-cards justify-content-center d-flex">
            <div class="col-sm-6 col-lg-3">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card" style="height: 37rem">
                            <div class="card-header justify-content-between">
                                <h3 class="card-title">Médicos</h3>
                                <div class="text-muted">Quantidade: {{ $medicos->count() }}</div>
                            </div>
                            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                                <div class="divide-y">
                                    @foreach ($medicos as $medico)
                                        <div>{{-- <span class="badge bg-red text-white">Sem viabilidade</span>
                                    <span class="badge bg-yellow text-white">Em cotação</span>
                                    <span class="badge bg-blue text-white">Enviado</span>
                                    <span class="badge bg-green text-white">Aprovado</span> --}}
                                            <div class="row">
                                                <a href="{{ route('medico.show', ['medico' => $medico]) }}"
                                                    class="card card-link card-link-pop">
                                                    <div class="card-body">
                                                        {{ $medico->nome }}
                                                        <div class="text-muted">{{ $medico->crm }}</div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card" style="height: 37rem">
                            <div class="card-header justify-content-between">
                                <h3 class="card-title">Pacientes</h3>
                                <div class="text-muted">Quantidade: {{ $pacientes->count() }}</div>
                            </div>
                            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                                <div class="divide-y">
                                    @foreach ($pacientes as $paciente)
                                        <div>{{-- <span class="badge bg-red text-white">Sem viabilidade</span>
                                    <span class="badge bg-yellow text-white">Em cotação</span>
                                    <span class="badge bg-blue text-white">Enviado</span>
                                    <span class="badge bg-green text-white">Aprovado</span> --}}
                                            <div class="row">
                                                <a href="{{ route('paciente.show', ['paciente' => $paciente]) }}"
                                                    class="card card-link card-link-pop">
                                                    <div class="card-body">
                                                        {{ $paciente->nome }}
                                                        <div class="text-muted">Data de nascimento:
                                                            {{ \Carbon\Carbon::parse($paciente->data_nascimento)->format('d/m/Y') }}
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card" style="height: 37rem">
                            <div class="card-header justify-content-between">
                                <h3 class="card-title">Atendimentos</h3>
                                <div class="text-muted">Quantidade: {{ $atendimentos->count() }}</div>
                            </div>
                            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                                <div class="divide-y">
                                    @foreach ($atendimentos as $atendimento)
                                        <div>{{-- <span class="badge bg-red text-white">Sem viabilidade</span>
                                    <span class="badge bg-yellow text-white">Em cotação</span>
                                    <span class="badge bg-blue text-white">Enviado</span>
                                    <span class="badge bg-green text-white">Aprovado</span> --}}
                                            <div class="row">
                                                <a href="{{ route('atendimento.show', ['atendimento' => $atendimento]) }}"
                                                    class="card card-link card-link-pop">
                                                    <div class="card-body">
                                                        ({{ $atendimento->id }})
                                                        Paciente {{ $atendimento->Paciente->nome }}, médico
                                                        {{ $atendimento->Medico->nome }}
                                                        <div class="text-muted">Data de atendimento:
                                                            {{ \Carbon\Carbon::parse($atendimento->data_atendimento)->format('d/m/Y') }}
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
