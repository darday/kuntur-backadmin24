@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row ">

            @include('components/sideBarUser')


        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 text-left">
            <h1 class="titulo">FESTIVAL DE CINE ECUATORIANO KUNTURÑAWI</h1>
            <hr>

           <div class="row">
               <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card" style="width: 100%;">
                    <div class="card-body" style="background-color: #f8b21e">
                        <div class="row">
                            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <p class="card-text"><i class="fas fa-film fa-5x" style="color:White"></i></p>

                            </div>
                            <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right">
                                <h1 class="titulo2" style="color:White; font-size:6vh ">48</h1>
                                <h1 class="titulo2" style="color:White; margin-top:-2vh">Películas</h1>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/peliculas') }}">

                    <p style="margin: 1vh;text-align: center;">48 Películas Participantes </p>
                    </a>
                  </div>
               </div>


               <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card" style="width: 100%;">
                    <div class="card-body" style="background-color: #f8b21e">
                        <div class="row">
                            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <p class="card-text"><i class="fas fa-list-alt fa-5x" style="color:White"></i></p>

                            </div>
                            <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right">
                                <h1 class="titulo2" style="color:White; font-size:6vh ">6</h1>
                                <h1 class="titulo2" style="color:White; margin-top:-2vh">Categorías</h1>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/peliculas') }}">
                    <p style="margin: 1vh;text-align: center;">Elige tu categoría Favorita </p>
                    </a>
                  </div>
               </div>
               <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card" style="width: 100%;">
                    <div class="card-body" style="background-color: #f8b21e">
                        <div class="row">
                            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                <p class="card-text"><i class="fas fa-chalkboard-teacher fa-5x" style="color:White"></i></p>

                            </div>
                            <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right">
                                <h1 class="titulo2" style="color:White; font-size:6vh ">5</h1>
                                <h1 class="titulo2" style="color:White; margin-top:-2vh">Talleres</h1>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/talleres') }}">
                    <p style="margin: 1vh;text-align: center;">Inscribete en nuestros Talleres </p>
                    </a>
                  </div>
               </div>
           </div>

           <div class="row" style="margin-top: 3vh">
               <h3></h3>
               <div class="card text-center" style="margin: 2vh; width:100%">
                <div class="card-header text-center" style="background-color: #f8b21e;">
                    Tu voto nos ayudará a elegir al Ganador
                </div>
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <a href="{{ url('/peliculas') }}" class="btn btn-outline-dark btn-lg">Comenzar a Votar</a>
                </div>
              </div>

           </div>


        </div>


    </div>
</div>







@endsection


