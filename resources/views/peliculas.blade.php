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

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet" href="css/carousel.css" >
         {{-- fafa Icon --}}
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">




        {{-- animated --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

        <script defer src="css/js/carousel.js"></script>

        <script type="text/javascript" src="css/js/jquery.js"></script>

        <style type="text/css">
            .ellipsis {
              text-overflow: ellipsis;
              white-space: nowrap;
              overflow: hidden;
             }
            .short { width: 100%; }
          </style>

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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
            
            /* para navbadesplegable  */
            .dropdown:hover>.dropdown-menu {
              display: block;
            }
            .dropdown-menu {
              margin: -0.125rem 0 0;
            }
            /*  */
        </style>
    </head>
    <body>




         @include('components/navBar')

         <div class="container"  style="padding-top: 13vh">
             
         </div>


         {{-- <div class="cont_img">
            <img src="img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
            <!--<div class="text_cent_img "><h1 class="tit-sob-img animated zoomIn">PELÍCULAS</h1></div>
            <div class="text_cent_img2 animated zoomIn"><p class="tit-sob-img2">IX FESTIVAL DE CINE KUNTURÑAWI</p></div>-->

        </div> --}}

        @include('components/redessociales')


        <div class="container">


            <div class=" text-center" style="margin-top: 7vh; align-items:center; margin-bottom:10vh;">
                <h1 class="titulo animate__animated  animate__fadeInRight">CATEGORÍAS</h1>
                <div class="row text-center justify-content-center animate__animated  animate__fadeInLeft" style="align-content: center; ">
                    {{-- <div class="col-md-2">
                        <a href="{{ url('/wawas') }}" style="text-decoration:none" ><h1 class="titulo2 zoom" >Wawas al Cine</h1></a>

                    </div>
                    <div class="col-md-2">
                        <a href="{{ url('/canelos') }}" style="text-decoration:none"><h1 class="titulo2 zoom" >Proyecto Union Base Pastaza</h1></a>

                    </div> --}}
                    <div class="col-md-2">
                        <a href="{{ url('/largometrajeficcion') }}"  style="text-decoration:none"><h1 class="titulo2 zoom">Largometrajes Ficción</h1></a>

                    </div>
                    <div class="col-md-2">
                        <a href="{{url('largometrajedocumental')}}" style="text-decoration:none"><h1 class="titulo2 zoom">Largometrajes Documental</h1></a>

                    </div>
                    <div class="col-md-2">
                        <a href="{{url('cortometrajeficcion')}}" style="text-decoration:none"><h1 class="titulo2 zoom">Cortometrajes Ficción</h1></a>

                    </div>
                    <div class="col-md-2">
                        <a href="{{url('cortometrajedocumental')}}"  style="text-decoration:none"><h1 class="titulo2 zoom">Cortometrajes Documental</h1></a>

                    </div>
                    <div class="col-md-2">
                        
                        <a href="{{url('cortometrajeanimado')}}" style="text-decoration:none"><h1 class="titulo2 zoom">Cortometrajes Animado</h1></a>

                    </div>
                    <div class="col-md-2">
                        
                        <a href="{{url('cortometrajeuniversitario')}}" style="text-decoration:none"><h1 class="titulo2 zoom">Cortometrajes Universitario</h1></a>

                    </div>
                    <div class="col-md-2">
                        <br>
                        <a href="{{url('cortometrajeuniversitario')}}" style="text-decoration:none"><h1 class="titulo2 zoom">Cortometraje Internacional</h1></a>

                    </div>
                </div>
                <hr style="height:1px; width:30%;margin-left:35% "  color="#636b6f">


            </div>

            <div class="container  ">
                <div class="row  ">

                @foreach($todo as $film)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center">
                        <div id="mainwrapper">
                            <div  class="">
                                <a href="{{url('/pelicula/'.$film->id)}}">
                                <img src="{{ asset('storage/app/public').'/'. $film->film_imagen}}" class="zoom2" style="border-radius: 3%" alt="foto"  height="auto" width="100%">  <!--se debe agregar php artisan storage:link-->
                                    <span class="caption full-caption text-center">
                                        
                                    </span>
                                </a>
                                <br>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title titulo2" type="hidden"><a style="text-decoration:none; color:#4c4c65" href="{{url('/pelicula/'.$film->id)}}"> <b>{{$film->film_Titulo}}</a></h5>
                                <h1 class="card-subtitle mb-2 text-muted titulo2"> </b></h1>
                             </div>
                        </div>
                    </div>
                @endforeach
                    <!--------------------------------------------------------->
                </div>
            </div>
            {{-- <div class="container animated fadeInUp">
                <div class="row ">

                @foreach($todo as $film)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 text-center">
                        <div id="mainwrapper">
                            <div  class="box">
                                <a href="{{url('/pelicula/'.$film->id)}}">
                                <img src="{{ asset('storage/app/public').'/'. $film->film_imagen}}" alt="foto"  height="auto" width="100%">  <!--se debe agregar php artisan storage:link-->
                                    <span class="caption full-caption text-center">
                                        <br><br><br><br><br>
                                        <button type="button" class="btn btn-warning">Ver Película</button>

                                    </span>
                                </a>
                                <br>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title" type="hidden"></h5>
                                <h1 class="card-subtitle mb-2 text-muted titulo2"><b>{{$film->film_Titulo}}</b></h1>
                             </div>





                        </div>
                    </div>
                @endforeach
                    <!--------------------------------------------------------->
                </div>
            </div> --}}

            <!--hasta Aqui-->
        </div>
        @include('components/footer')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
    </body>
</html>
