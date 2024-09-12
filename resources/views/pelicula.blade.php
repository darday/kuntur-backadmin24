<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Festival Kunturñawi</title>
        <link rel="icon" href="img/logos/icofestival.png" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/helvetica-neue-lt-pro" rel="stylesheet">
            


        {{-- fafa Icon --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

        <link rel="stylesheet"    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="../css/style.css" >
        <style>
            
            /* para navbadesplegable  */
            .dropdown:hover>.dropdown-menu {
              display: block;
            }
            .dropdown-menu {
              margin: -0.125rem 0 0;
            }
            /*  */
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Helvetica Neue LT Pro 300', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-smd {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>



         @include('components/navBar2')


        <div class="container ">
            <br>
            <br>
            <br>

            <div class="card" style="margin-bottom: 10vh">
                <div class="card-header">
                    <h1 class="titulo" style="font-size: 2.3em; margin-bottom:-10px">{{$film->film_Categoria}}</h1>
                </div>
                <div class="card-body" style="background-color: #4d4d4d">
                    @if(Session::has('Mensaje'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('Mensaje')}}
                        </div>
                    @endif

                    <!--desde aqui-->

                    <div class="row " style="margin-bottom: 10vh; padding-top:5vh">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1">
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center animate__animated animate__fadeInLeft">
                            <img src="{{ asset('storage/app/public').'/'. $film->film_imagen}}" alt="foto" height="auto"; width="100%" style="border-radius: 10px" >  <!--se debe agregar php artisan storage:link-->
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left animate__animated animate__fadeIn">
                            <h1  class="titulo" style="color: white !important"><b>{{$film->film_Titulo}}</b></h1>
                            <h3 class="pel">{{$film->film_Categoria}}</h3>
                            <p style="color: white"><b style="font-weight: bold">Director:</b> {{$film->film_Director}}</p>
                            <p style="color: white"><b  style="font-weight: bold">Duración:</b> {{$film->film_Duracion}}</p>
                            <p style="color: white"><b  style="font-weight: bold">Ciudad:</b> {{$film->film_Ciudad}} </p>
                            <p style="color: white"><b style="font-weight: bold">Sinopsis:</b> {{$film->film_Descripcion}} </p>
                            <hr>

                        </div>


                        <div class="col-12 col-sm-12 col-md-6 col-lg-1 col-xl-1">
                        </div>
                    </div>

                    <!--hasta aqui-->

                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12 col-lg-1 col-xl-1">

                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            @if( $film->film_Estado == 1)
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-center  " >

                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-warning btn-block text-left collapsed text-center" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Votar
                                                </button>
                                            </h2>
                                            </div>
                                            @if(Auth::user() && $vas==0 )
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <!--<div class="card-body">
                                                    <button type="button" class="btn btn-success">Sobresaliente</button>
                                                    <button type="button" class="btn btn-warning">Muy Buena</button>
                                                    <button type="button" class="btn btn-danger">Buena</button>
                                                </div>-->

                                                <div class="card-body">
                                                    <form method="post" action="{{url('/vote/'.$film->id)}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="vote" value="1">
                                                        <button type="Submit"  class="btn btn-outline-dark" style="width: 100%"  > Sobresaliente</button>
                                                    </form>
                                                    <form method="post" action="{{url('/vote/'.$film->id)}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="vote" value="2">
                                                        <button type="Submit" class="btn btn-outline-dark" style="width: 100%" > Muy Bueno</button>
                                                    </form>
                                                    <form method="post" action="{{url('/vote/'.$film->id)}}">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="vote" value="3">
                                                        <button type="Submit"  class="btn btn-outline-dark" style="width: 100%"  > Bueno</button>
                                                    </form>



                                                </div>
                                            </div>
                                            @endif

                                            @if (Auth::user() == null )
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <h1 class="titulo2">Debes iniciar sesion para poder Votar</h1>
                                                    <a href="{{ route('login') }}"><button class="btn btn-outline-dark"> Ingresar</button></a>
                                                    <a href="{{ route('register') }}"><button class="btn btn-warning"> Resgistrar </button></a>
                                                </div>
                                            </div>
                                            @endif

                                            @if (Auth::user() != null && $vas != 0  )
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <h1 class="titulo2">Usted ya ha votado por esta película</h1>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                        @endif
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            @if( $film->film_Estado == 0)
                                <h1  class="titulo " style="color: white !important"><b>Película Deshabilitada</b></h1>
                                <h1 style="color: white !important;" class="titulo2"> Esta película estuvo disponible de 03 al 27 de Noviembre</h1>
                                <br>
                                <br>
                                <br>
                            @endif
                            @if( $film->film_Estado == 1)
                                <h1  class="titulo " style="color: white !important"><b> Película Habilitada</b></h1>



                            @endif
                        </div>

                    </div>

                    @if( $film->film_Estado == 1)
                        <!--Inicio -->
                        <div class="row  align-items-center">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1 ">

                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 text-center embed-container">
                                <iframe src="https://player.vimeo.com/video/{{$film->film_Url}}" width="640" height="360"  frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>



                            <!--------------------------------------------------------->
                        </div>

                    @endif




                    <!--fin-->
                </div>
            </div>

            <div class="row">
                <div class="col-12 ">
                    <a href="{{ url('/peliculas') }}"><button type="button" class="btn btn-outline-dark btn-lg">VOLVER A CATEGORÍAS</button></a>
                </div>
            </div>




            <div class="row ">
                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-center">
                    <h1 class="titulo">COMENTARIOS</h1>
                </div>
            </div>

            @if( $film->film_Estado == 1)

                @if (Auth::user() != null)
                <form method="POST" action="{{ route('createcoment') }}"  >
                    @csrf
                    {{csrf_field()}}

                    <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-center" >
                        <textarea  name="com_Descripcion" id="textarea" rows="2" class="form-control" required ></textarea>
                    </div>
                    <div class="col-12 col-sm-12 col-stmd-12 col-lg-12 col-xl-12 text-left">

                        <button type="submit" class="btn btn-primary">Enviar Comentario</button>
                    </div>

                    <input type="hidden" name="film_id" value="{{$film->id}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                </form>
                @endif


            @endif





                <br>
                <br>
                <br>



            <div class="row"  >
            @foreach($user as $comentario)
                <div class="article col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 justify-content-center" style="padding: 1vh"  >
                    <div class="card justify-content-center" >
                        <div class="card-header" style="background-color: #f8b21e; ">
                            <img src="{{ asset('storage/app/public').'/'. $comentario->img }} "  class='imgPerfil'>
                            <span style="color: black"><b>{{$comentario->name}}</b></span>
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>{{$comentario->com_Descripcion}}</p>
                          </blockquote>
                        </div>
                      </div>
                </div>
                
                <br>
                @endforeach
            </div>









        </div>
        @include('components/footer')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
    </body>
</html>
