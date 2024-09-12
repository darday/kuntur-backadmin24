@extends('layouts.app')

@section('content')

<div class="div" style="background-image: url('img/carousel/fondo_head.gif'); width:auto; height:100vh; background-size:cover; vertical-align:middle">
    <div class="container" style="padding-top: 20vh">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow p-3 mb-5" style="background-color: rgba(49, 45, 45, 0.274)">
                    {{-- <div class="card-header" style="background-color: #f8b21e">{{ __('Festival de Cine Kunturñawi') }}</div> --}}
                    <div class="card-header">
                        <h5>Registro Kunturñawi X</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de Usuario') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma Contraseña') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
    
    
    
                            <input type="hidden" value="/uploads/kuntur.jpg" name ="img">
                            <input type="hidden" value="user" name ="rol">
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Registrar') }}
                                    </button>
    
                                    <a href="{{ url('/') }}">
                                        <button type="button" class="btn btn-outline-dark">
                                            {{ __('Cancelar') }}
                                        </button>
                                    </a>
    
                                </div>
                            </div>
    
                        </form>
                    </div>
                </div>
            </div>
    
    
        </div>
    
    
    </div>
</div>
@endsection
