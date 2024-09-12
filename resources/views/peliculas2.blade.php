<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Festival Kunturñawi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet" href="css/carousel.css" >

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
        </style>
    </head>
    <body>




         @include('components/navBar')



         <div class="cont_img">
            <img src="../img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
            <div class="text_cent_img"><h1 class="tit-sob-img">Películas</h1></div>
        </div>

        <div class="container">
             <br>
            <hr>

            <div class=" text-center" style="margin-top: 10vh; align-items:center; margin-bottom:10vh">
                <h1 class="titulo">PELÍCULAS PARTICIPANTES</h1>
                <hr style="height:1px; width:20%;margin-left:40% "  color="#636b6f">
                <a href="#wawas"><h1 class="titulo2">Wawas al Cine</h1></a>
                <a href="#larFic"><h1 class="titulo2">Largometrajes Ficción</h1></a>
                <a href="#larDoc"><h1 class="titulo2">Largometrajes Documental</h1></a>
                <a href="#corFic"><h1 class="titulo2">Cortometrajes Ficción</h1></a>
                <a href="#corDoc"><h1 class="titulo2">Cortometrajes Documental</h1></a>
                <a href="#corAnim"><h1 class="titulo2">Cortometrajes Animado</h1></a>
                <a href="#corUni"><h1 class="titulo2">Cortometrajes Universitario</h1></a>

                <hr style="height:1px; width:20%;margin-left:40% "  color="#636b6f">

            </div>

            <div class="text-center" id="wawas">
                <div class="cont_img" style="margin-bottom: 2vh">
                    <img src="../img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
                    <div class="text_cent_img"><h1 class="tit-sob-img">Wawas</h1></div>
                </div>

                <div class="Carousel" style="margin-bottom: 10vh">
                    <div class="slick-list" id="slick-list" style="width: 100%; height:50vh">
                        <button class="slick-arrow slick-prev" id="button-prev" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                        </button>
                        <div class="slick-track" id="track">

                            @foreach($wawas as $film)


                                <div class="slick">
                                    <div id="mainwrapper" >
                                        <div  class="box">
                                            <a href="{{url('/pelicula/'.$film['id'])}}">
                                            <img src="{{ asset('storage').'/'. $film['film_imagen']}}" alt="foto"  height="320px" width="100%">  <!--se debe agregar php artisan storage:link-->
                                                <span class="caption full-caption text-center" style="z-index: 1">
                                                    <br><br><br><br><br>
                                                    <button type="button" class="btn btn-warning">Ver Película</button>
                                                </span>
                                            </a>
                                            <br>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" type="hidden"></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><b>{{$film['film_Titulo'] }}</b></h6>
                                        </div>
                                    </div>
                                </div>
                        @endforeach

                        </div>
                        <button class="slick-arrow slick-next" id="button-next" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                        </button>
                    </div>
                </div>

            </div>

            <div class="text-center" id="larFic">
                <div class="cont_img" style="margin-bottom: 2vh">
                    <img src="../img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
                    <div class="text_cent_img"><h1 class="tit-sob-img">LarFic</h1></div>
                </div>

                <div class="Carousel" style="margin-bottom: 10vh">
                    <div class="slick-list" id="slick-list" style="width: 100%; height:50vh">
                        <button class="slick-arrow slick-prev" id="button-prev" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                        </button>
                        <div class="slick-track" id="track">

                            @foreach($larFic as $film)


                                <div class="slick">
                                    <div id="mainwrapper" >
                                        <div  class="box">
                                            <a href="{{url('/pelicula/'.$film['id'])}}">
                                            <img src="{{ asset('storage').'/'. $film['film_imagen']}}" alt="foto"  height="320px" width="100%">  <!--se debe agregar php artisan storage:link-->
                                                <span class="caption full-caption text-center" style="z-index: 1">
                                                    <br><br><br><br><br>
                                                    <button type="button" class="btn btn-warning">Ver Película</button>
                                                </span>
                                            </a>
                                            <br>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" type="hidden"></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><b>{{$film['film_Titulo'] }}</b></h6>
                                        </div>
                                    </div>
                                </div>
                        @endforeach

                        </div>
                        <button class="slick-arrow slick-next" id="button-next" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                        </button>
                    </div>
                </div>

            </div>



            <div class="text-center" id="larDoc">
                <div class="cont_img" style="margin-bottom: 2vh">
                    <img src="../img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
                    <div class="text_cent_img"><h1 class="tit-sob-img">LarDoc</h1></div>
                </div>

                <div class="Carousel" style="margin-bottom: 10vh">
                    <div class="slick-list" id="slick-list" style="width: 100%; height:50vh">
                        <button class="slick-arrow slick-prev" id="button-prev" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                        </button>
                        <div class="slick-track" id="track">

                            @foreach($larDoc as $film)


                                <div class="slick">
                                    <div id="mainwrapper" >
                                        <div  class="box">
                                            <a href="{{url('/pelicula/'.$film['id'])}}">
                                            <img src="{{ asset('storage').'/'. $film['film_imagen']}}" alt="foto"  height="320px" width="100%">  <!--se debe agregar php artisan storage:link-->
                                                <span class="caption full-caption text-center" style="z-index: 1">
                                                    <br><br><br><br><br>
                                                    <button type="button" class="btn btn-warning">Ver Película</button>
                                                </span>
                                            </a>
                                            <br>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" type="hidden"></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><b>{{$film['film_Titulo'] }}</b></h6>
                                        </div>
                                    </div>
                                </div>
                        @endforeach

                        </div>
                        <button class="slick-arrow slick-next" id="button-next" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                        </button>
                    </div>
                </div>

            </div>



            <div class="text-center" id="corFic">
                <div class="cont_img" style="margin-bottom: 2vh">
                    <img src="../img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
                    <div class="text_cent_img"><h1 class="tit-sob-img">CorFic</h1></div>
                </div>

                <div class="Carousel" style="margin-bottom: 10vh">
                    <div class="slick-list" id="slick-list" style="width: 100%; height:50vh">
                        <button class="slick-arrow slick-prev" id="button-prev" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                        </button>
                        <div class="slick-track" id="track">

                            @foreach($corFic as $film)


                                <div class="slick">
                                    <div id="mainwrapper" >
                                        <div  class="box">
                                            <a href="{{url('/pelicula/'.$film['id'])}}">
                                            <img src="{{ asset('storage').'/'. $film['film_imagen']}}" alt="foto"  height="320px" width="100%">  <!--se debe agregar php artisan storage:link-->
                                                <span class="caption full-caption text-center" style="z-index: 1">
                                                    <br><br><br><br><br>
                                                    <button type="button" class="btn btn-warning">Ver Película</button>
                                                </span>
                                            </a>
                                            <br>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" type="hidden"></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><b>{{$film['film_Titulo'] }}</b></h6>
                                        </div>
                                    </div>
                                </div>
                        @endforeach

                        </div>
                        <button class="slick-arrow slick-next" id="button-next" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                        </button>
                    </div>
                </div>

            </div>



            <div class="text-center" id="corDoc">
                <div class="cont_img" style="margin-bottom: 2vh">
                    <img src="../img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
                    <div class="text_cent_img"><h1 class="tit-sob-img">CorDoc</h1></div>
                </div>

                <div class="Carousel" style="margin-bottom: 10vh">
                    <div class="slick-list" id="slick-list" style="width: 100%; height:50vh">
                        <button class="slick-arrow slick-prev" id="button-prev" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                        </button>
                        <div class="slick-track" id="track">

                            @foreach($corDoc as $film)


                                <div class="slick">
                                    <div id="mainwrapper" >
                                        <div  class="box">
                                            <a href="{{url('/pelicula/'.$film['id'])}}">
                                            <img src="{{ asset('storage').'/'. $film['film_imagen']}}" alt="foto"  height="320px" width="100%">  <!--se debe agregar php artisan storage:link-->
                                                <span class="caption full-caption text-center" style="z-index: 1">
                                                    <br><br><br><br><br>
                                                    <button type="button" class="btn btn-warning">Ver Película</button>
                                                </span>
                                            </a>
                                            <br>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" type="hidden"></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><b>{{$film['film_Titulo'] }}</b></h6>
                                        </div>
                                    </div>
                                </div>
                        @endforeach

                        </div>
                        <button class="slick-arrow slick-next" id="button-next" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                        </button>
                    </div>
                </div>

            </div>



            <div class="text-center" id="corAnim">
                <div class="cont_img" style="margin-bottom: 2vh">
                    <img src="../img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
                    <div class="text_cent_img"><h1 class="tit-sob-img">CorAnim</h1></div>
                </div>

                <div class="Carousel" style="margin-bottom: 10vh">
                    <div class="slick-list" id="slick-list" style="width: 100%; height:50vh">
                        <button class="slick-arrow slick-prev" id="button-prev" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                        </button>
                        <div class="slick-track" id="track">

                            @foreach($corAnim as $film)


                                <div class="slick">
                                    <div id="mainwrapper" >
                                        <div  class="box">
                                            <a href="{{url('/pelicula/'.$film['id'])}}">
                                            <img src="{{ asset('storage').'/'. $film['film_imagen']}}" alt="foto"  height="320px" width="100%">  <!--se debe agregar php artisan storage:link-->
                                                <span class="caption full-caption text-center" style="z-index: 1">
                                                    <br><br><br><br><br>
                                                    <button type="button" class="btn btn-warning">Ver Película</button>
                                                </span>
                                            </a>
                                            <br>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" type="hidden"></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><b>{{$film['film_Titulo'] }}</b></h6>
                                        </div>
                                    </div>
                                </div>
                        @endforeach

                        </div>
                        <button class="slick-arrow slick-next" id="button-next" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                        </button>
                    </div>
                </div>

            </div>



            <div class="text-center" id="corUni">
                <div class="cont_img" style="margin-bottom: 2vh">
                    <img src="../img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
                    <div class="text_cent_img"><h1 class="tit-sob-img">CorUni</h1></div>
                </div>

                <div class="Carousel" style="margin-bottom: 10vh">
                    <div class="slick-list" id="slick-list" style="width: 100%; height:50vh">
                        <button class="slick-arrow slick-prev" id="button-prev" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                        </button>
                        <div class="slick-track" id="track">

                            @foreach($corUni as $film)


                                <div class="slick">
                                    <div id="mainwrapper" >
                                        <div  class="box">
                                            <a href="{{url('/pelicula/'.$film['id'])}}">
                                            <img src="{{ asset('storage').'/'. $film['film_imagen']}}" alt="foto"  height="320px" width="100%">  <!--se debe agregar php artisan storage:link-->
                                                <span class="caption full-caption text-center" style="z-index: 1">
                                                    <br><br><br><br><br>
                                                    <button type="button" class="btn btn-warning">Ver Película</button>
                                                </span>
                                            </a>
                                            <br>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" type="hidden"></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><b>{{$film['film_Titulo'] }}</b></h6>
                                        </div>
                                    </div>
                                </div>
                        @endforeach

                        </div>
                        <button class="slick-arrow slick-next" id="button-next" style="margin-top: -5vh; z-index:2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                        </button>
                    </div>
                </div>

            </div>




            <!--hasta Aqui-->
        </div>
        @include('components/footer')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
    </body>
</html>
