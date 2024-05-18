@extends('layouts.app')


@section('content')
<div class="card m-3">
    <div class="card-header">
      <h3 class="card-title">Cadastro de atendimento</h3>
    </div>
    @if (session('error'))
        <div class="alert alert-danger mt-1">
            {{ session('error') }}
        </div>
    @endif
    <div class="card-body">
    <form method="POST" action="{{ route('atendimento.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3 mb-4">
            <div class="col-md">
                <div class="mb-3">
                    <label class="col-form-label required">Data do atendimento</label>
                    <div class="col">
                        <input type="text" name="data_atendimento" id="data_atendimento" class="form-control" value="{{ old('data_atendimento', '') }}" autocomplete="off" readonly/> {{-- value="{{ old('data_nascimento', '') }}" --}}
                        <span class="{{ $errors->has('data_atendimento') ? 'text-danger' : '' }}">
                            {{ $errors->has('data_atendimento') ? $errors->first('data_atendimento') : '' }}
                        </span>
                    </div>
                    <div class="col">
                        <p id="resultado_data"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="mb-3">
                <label class="col-3 col-form-label required">Medico</label>
                <div class="col">
                    <select class="form-select" type="text" name="medico_id" id="medico_id">
                        <option></option>
                        @foreach($medicos as $m)
                            <option value="{{ $m->id }}" {{ old('medico_id') == $m->id ? 'selected' : '' }}>
                                {{ $m->nome }}
                            </option>
                        @endforeach
                    </select>
                    <span class="{{ $errors->has('medico_id') ? 'text-danger' : '' }}">
                        {{ $errors->has('medico_id') ? $errors->first('medico_id') : '' }}
                    </span>
                </div>
            </div>
            <div class="mb-3">
                <label class="col-3 col-form-label required">Paciente</label>
                <div class="col">
                    <select class="form-select" type="text" name="paciente_id" id="paciente_id">
                        <option></option>
                        @foreach($pacientes as $p)
                            <option value="{{ $p->id }}" {{ old('paciente_id') == $p->id ? 'selected' : '' }}>
                                {{ $p->nome }}
                            </option>
                        @endforeach
                    </select>
                    <span class="{{ $errors->has('paciente_id') ? 'text-danger' : '' }}">
                        {{ $errors->has('paciente_id') ? $errors->first('paciente_id') : '' }}
                    </span>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" /></svg>
                Cadastrar
            </button>
        </div>
    </form>
  </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/tom-select@latest/dist/js/tom-select.base.min.js" defer></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var el;
        window.TomSelect && (new TomSelect(el = document.getElementById('medico_id'), {
            options: [
                @foreach($medicos as $medico)
                    {value: '{{ $medico->id }}', text: '{{ str_replace("'", " ", $medico->nome) }}'},
                @endforeach
            ], // quando digita um nome de cidade e clica, o que foi digitado ainda continua lá, preciso resolver isso depois
        }));
        var el2;
        window.TomSelect && (new TomSelect(el2 = document.getElementById('paciente_id'), {
            options: [
                @foreach($pacientes as $paciente)
                    {value: '{{ $paciente->id }}', text: '{{ str_replace("'", " ", $paciente->nome) }}'},
                @endforeach
            ], // quando digita um nome de cidade e clica, o que foi digitado ainda continua lá, preciso resolver isso depois
        }));
    });

    var picker = new Lightpick({
        field: document.getElementById('data_atendimento'),
        minDate: moment(),
        disableWeekends: true
    });
</script>
@endsection
