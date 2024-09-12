@extends('layouts.app')

@section('content')
    <div class="div" style="background-image: url('img/carousel/fondo_head.gif'); width:auto; height:100vh; background-size:cover; vertical-align:middle">

        <div class="container" >
    
            <div class="row justify-content-left">
                <div class="col-md-12 col-lg-4" style="padding-top: 16vh">
                    <div class="card shadow p-3 mb-5 " style="background-color:rgba(49, 45, 45, 0.274)">
        
                        
                        {{-- <div class="card-header" style="background-color: #f8b21e; text-align:center"><b><h5>{{ __('Iniciar Sesión') }}</h5></b></div> --}}
                        <div class="card-header">
                            <h5>Inicio de Sesión</h5>
                        </div>
                        <div class="card-body">
        
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Correo electrónico:</label>
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                 
                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Correo o Contraseña Incorrectos</strong>
                                    </span>
                              
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Contraseña:</label>
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror                        </div>
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                    <label class="form-check-label" for="remember">
                                        {{ __('Guardar mis datos') }}
                                    </label>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-success " style="">
                                            {{ __('Ingresar') }}
                                        </button>
                                        <a href="{{ url('/') }}">
                                            <button type="button" class="btn btn-outline-dark">
                                                {{ __('Cancelar') }}
                                            </button>
                                        </a>
        
                                       @if (Route::has('password.request'))
                                          <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                               {{ __('Olvidaste tu Contraseña?') }}
                                            </a>-->
                                        @endif
                                    </div>
                                </div>
        
                            </form>
        
                            <hr/>
                            <p>¿No tienes una cuenta? <br><label><a href="{{ route('register') }}" style="color: white">Crear una cuenta nueva</a></label> </p>
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
