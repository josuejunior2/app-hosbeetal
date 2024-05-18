@extends('layouts.app')


@section('content')
<div class="card m-3">
    <div class="card-header">
      <h3 class="card-title">Cadastro de medico</h3>
    </div>
    @if (session('error'))
        <div class="alert alert-danger mt-1">
            {{ session('error') }}
        </div>
    @endif
    <div class="card-body">
    <form method="POST" action="{{ route('medico.update', ['medico' => $medico]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3 mb-4">
            <div class="col-md">
                <div class="mb-3">
                    <label class="col-form-label required">Nome</label>
                    <div class="col">
                        <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome', $medico->nome) }}">
                        <span class="{{ $errors->has('nome') ? 'text-danger' : '' }}">
                            {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-md">
                <div class="mb-3">
                    <label class="col-form-label required">Especialidade</label>
                    <div class="col">
                        <input type="text" name="especialidade" id="especialidade" class="form-control" value="{{ old('especialidade', $medico->especialidade)  }}" autocomplete="off"/>
                        <span class="{{ $errors->has('especialidade') ? 'text-danger' : '' }}">
                            {{ $errors->has('especialidade') ? $errors->first('especialidade') : '' }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="mb-3">
                    <label class="col-form-label required">Código CRM</label>
                    <div class="table-responsive">
                        <table >
                        <tbody>
                            <tr>
                            <td>
                                <span class="input-group-text">
                                    CRM/
                                </span>
                            </td>
                            <td>
                                <select class="form-select" name="UF" id="UF" value="{{ old('UF', substr($medico->crm, 4, 2)) }}">
                                    <option value="0">Selecione o UF</option>
                                    <option value="AC" {{ old('UF') == 'AC' || substr($medico->crm, 4, 2) == 'AC' ? 'selected' : '' }}>AC</option>
                                    <option value="AL" {{ old('UF') == 'AL' || substr($medico->crm, 4, 2) == 'AL' ? 'selected' : '' }}>AL</option>
                                    <option value="AP" {{ old('UF') == 'AP' || substr($medico->crm, 4, 2) == 'AP' ? 'selected' : '' }}>AP</option>
                                    <option value="AM" {{ old('UF') == 'AM' || substr($medico->crm, 4, 2) == 'AM' ? 'selected' : '' }}>AM</option>
                                    <option value="BA" {{ old('UF') == 'BA' || substr($medico->crm, 4, 2) == 'BA' ? 'selected' : '' }}>BA</option>
                                    <option value="CE" {{ old('UF') == 'CE' || substr($medico->crm, 4, 2) == 'CE' ? 'selected' : '' }}>CE</option>
                                    <option value="DF" {{ old('UF') == 'DF' || substr($medico->crm, 4, 2) == 'DF' ? 'selected' : '' }}>DF</option>
                                    <option value="ES" {{ old('UF') == 'ES' || substr($medico->crm, 4, 2) == 'ES' ? 'selected' : '' }}>ES</option>
                                    <option value="GO" {{ old('UF') == 'GO' || substr($medico->crm, 4, 2) == 'GO' ? 'selected' : '' }}>GO</option>
                                    <option value="MA" {{ old('UF') == 'MA' || substr($medico->crm, 4, 2) == 'MA' ? 'selected' : '' }}>MA</option>
                                    <option value="MT" {{ old('UF') == 'MT' || substr($medico->crm, 4, 2) == 'MT' ? 'selected' : '' }}>MT</option>
                                    <option value="MS" {{ old('UF') == 'MS' || substr($medico->crm, 4, 2) == 'MS' ? 'selected' : '' }}>MS</option>
                                    <option value="MG" {{ old('UF') == 'MG' || substr($medico->crm, 4, 2) == 'MG' ? 'selected' : '' }}>MG</option>
                                    <option value="PA" {{ old('UF') == 'PA' || substr($medico->crm, 4, 2) == 'PA' ? 'selected' : '' }}>PA</option>
                                    <option value="PB" {{ old('UF') == 'PB' || substr($medico->crm, 4, 2) == 'PB' ? 'selected' : '' }}>PB</option>
                                    <option value="PR" {{ old('UF') == 'PR' || substr($medico->crm, 4, 2) == 'PR' ? 'selected' : '' }}>PR</option>
                                    <option value="PE" {{ old('UF') == 'PE' || substr($medico->crm, 4, 2) == 'PE' ? 'selected' : '' }}>PE</option>
                                    <option value="PI" {{ old('UF') == 'PI' || substr($medico->crm, 4, 2) == 'PI' ? 'selected' : '' }}>PI</option>
                                    <option value="RJ" {{ old('UF') == 'RJ' || substr($medico->crm, 4, 2) == 'RJ' ? 'selected' : '' }}>RJ</option>
                                    <option value="RN" {{ old('UF') == 'RN' || substr($medico->crm, 4, 2) == 'RN' ? 'selected' : '' }}>RN</option>
                                    <option value="RS" {{ old('UF') == 'RS' || substr($medico->crm, 4, 2) == 'RS' ? 'selected' : '' }}>RS</option>
                                    <option value="RO" {{ old('UF') == 'RO' || substr($medico->crm, 4, 2) == 'RO' ? 'selected' : '' }}>RO</option>
                                    <option value="RR" {{ old('UF') == 'RR' || substr($medico->crm, 4, 2) == 'RR' ? 'selected' : '' }}>RR</option>
                                    <option value="SC" {{ old('UF') == 'SC' || substr($medico->crm, 4, 2) == 'SC' ? 'selected' : '' }}>SC</option>
                                    <option value="SP" {{ old('UF') == 'SP' || substr($medico->crm, 4, 2) == 'SP' ? 'selected' : '' }}>SP</option>
                                    <option value="SE" {{ old('UF') == 'SE' || substr($medico->crm, 4, 2) == 'SE' ? 'selected' : '' }}>SE</option>
                                    <option value="TO" {{ old('UF') == 'TO' || substr($medico->crm, 4, 2) == 'TO' ? 'selected' : '' }}>TO</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="numero_crm" value="{{ old('numero_crm', substr($medico->crm, 7, 6)) }}" id="numero_crm" class="form-control" autocomplete="off" />
                            </td>
                            </tr>
                        </tbody>
                        </table>
                        <span class="{{ $errors->has('UF') ? 'text-danger' : '' }}">
                            {{ $errors->has('UF') ? $errors->first('UF') : '' }}
                        </span>
<span class="{{ $errors->has('numero_crm') ? 'text-danger' : '' }}">
                            {{ $errors->has('numero_crm') ? $errors->first('numero_crm') : '' }}
                        </span>
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
