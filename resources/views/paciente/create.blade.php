@extends('layouts.app')

@if (session('error'))
    <div class="alert alert-danger mt-1">
        {{ session('error') }}
    </div>
@endif

@section('content')
<div class="card m-3">
    <div class="card-header">
      <h3 class="card-title">Cadastro de Paciente</h3>
    </div>
    <div class="card-body">
    <form method="POST" action="{{ route('paciente.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3 mb-4">
            <div class="col-md">
                <div class="mb-3">
                    <label class="col-form-label required">Nome</label>
                    <div class="col">
                        <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome', '') }}">
                        <span class="{{ $errors->has('nome') ? 'text-danger' : '' }}">
                            {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="mb-3">
                    <label class="col-form-label required">E-mail</label>
                    <div class="col">
                        <input type="text" class="form-control" name="email" id="email" value="{{ old('email', '') }}">
                        <span class="{{ $errors->has('email') ? 'text-danger' : '' }}">
                            {{ $errors->has('email') ? $errors->first('email') : '' }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-md">
                <div class="mb-3">
                    <label class="col-form-label required">Cadastro de Pessoa Física (CPF)</label>
                    <div class="col">
                        <input type="text" name="cpf" id="cpf" class="form-control" value="{{ old('cpf', '') }}" data-mask="000.000.000-00" data-mask-visible="true" placeholder="000.000.000-00" autocomplete="off"/>
                        <span class="{{ $errors->has('cpf') ? 'text-danger' : '' }}">
                            {{ $errors->has('cpf') ? $errors->first('cpf') : '' }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="mb-3">
                    <label class="col-form-label required">Data de Nascimento</label>
                    <div class="col">
                        <input type="text" name="data_nascimento" id="data_nascimento" class="form-control" value="{{ old('data_nascimento', '') }}" autocomplete="off" readonly/> {{-- value="{{ old('data_nascimento', '') }}" --}}
                        <span class="{{ $errors->has('data_nascimento') ? 'text-danger' : '' }}">
                            {{ $errors->has('data_nascimento') ? $errors->first('data_nascimento') : '' }}
                        </span>
                    </div>
                    <div class="col">
                        <p id="resultado_data"></p>
                    </div>
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
<script>
    var picker = new Lightpick({
        field: document.getElementById('data_nascimento')
    });
</script>

@endsection
