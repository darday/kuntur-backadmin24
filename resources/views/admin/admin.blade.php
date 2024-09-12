@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >

        @if(Auth::user()->rol == 'admin')
            @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <hr>
                <h1>BIENVENIDO AL SISTEMA DEL FESTIVAL KUNTURÑAWI IX</h1>
                <hr>

             </div>
        @else
             <h1>Usted No tiene permiso para ver esta Página<h1>

        @endif


    </div>
</div>




@endsection


