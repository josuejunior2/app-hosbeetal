@extends('layouts.app')

@section('content')

<div class="page page-center">
    <div class="container container-narrow py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark"><img src="/logo.png" width="110" height="32" alt="Tabler" class="navbar-brand-image"></a>
      </div>
      <div class="card card-md">
        <div class="card-body">
          @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              @endif
          <h3 class="card-title">Bem-vindo ao HosBEEtal!</h3>
        </div>
      </div>
    </div>
  </div>

@endsection
