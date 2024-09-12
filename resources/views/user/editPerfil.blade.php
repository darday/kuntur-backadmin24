@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBarUser')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1 class="titulo">Editar Perfil</h1>
                <hr>


                    @if(Session::has('Mensaje'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('Mensaje')}}
                        </div>
                    @endif

                    <div class="row text-center" style="align-content: center">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-4 col-xl-4">
                            <img src="{{ asset('storage/app/public').'/'. Auth::user()->img }} "  class='imgEditp'>

                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-8 col-xl-8" style="margin-top: 5vh">

                            <form method="POST" action="{{ route('uperfil') }}"  enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de Usuario') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name}}" required autocomplete="name" autofocus>

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
                                        <a  data-toggle="popover"
                                        data-trigger="focus"
                                        title="No es Posible Cambiar el Correo"
                                        data-content="El correo no se puede modificar">
                                        <input id="email"
                                            type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ Auth::user()->email}}"
                                            required autocomplete="email"

                                            disabled>
                                    </a>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong> Este correo no esta disponible</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nueva Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña Nueva" >

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Las contraseñas no coinciden </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right">Imagen</label>
                                    <div class="col-md-6">
                                        <input type="file" name="img" accept="image/*" required autocomplete="name">
                                    </div>
                                </div>


                                <script src="{{ asset('js/programacion.js') }}">


                                </script>


                                <input type="hidden" value="{{ Auth::user()->email}}" name ="email">
                                <input type="hidden" value="user" name ="rol">

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Actualizar') }}
                                        </button>

                                        <a href="{{ url('home') }}">
                                            <button type="button" class="btn btn-primary">
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





@endsection


