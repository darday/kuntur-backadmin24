@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #f8b21e">{{ __('Hola! Ayudanos verificando tu correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado correo de verificación.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar necesitamos que verifiques la creación de tu cuenta accediendo a tu correo elecrónico.') }}<br>
                     {{ __('1.-Ingresa a tu correo electrónico .') }}<br>
                     {{ __('2.-En tu bandeja de entrada encontrarás el correo de verificación abrelo, verifica y listo.') }}<br>
               
                    {{ __('Disfruta del Festival de cine ecuatoriano online Kunturnawi en su novena edición') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Enviar correo de verificación') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
