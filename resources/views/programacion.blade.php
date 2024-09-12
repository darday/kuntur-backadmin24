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
        <link rel="stylesheet" href="css/collapse.css" >

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
            <img src="img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
            <!--<div class="text_cent_img"><h1 class="tit-sob-img animated zoomIn">PROGRAMACIÓN</h1></div>
            <div class="text_cent_img2 animated zoomIn"><p class="tit-sob-img2">IX FESTIVAL DE CINE KUNTURÑAWI</p></div>-->

        </div>

        @include('components/redessociales')

        <div class="container "  style=" text-align:center; margin-top:9vh">
            <a href="docs/agenda2020.pdf" download="Agenda_2020">
                <button type="button" class="btn btn-outline-dark btn-lg"><b>DESCARGAR PROGRAMACIÓN</b></button>
            </a>
        </div>



        <div class="container container2 container2">

            @foreach($fecha as $fehoy)
                @if($hoy == $fehoy->fecha)
                    <h1 class="titulo">Hoy en Cartelera</h1>
                    <div class="row" style="margin-left: 1px;">

                        @foreach($pro as $prog)

                        @if( $fehoy["id"] == $prog->pro_Fecha)

                        <div class="card-body col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" style="">
                            <div class="card card shadow p-3 mb-5 bg-white rounded" style="width: 18rem; height:275px;background-color:#f8b21e !important">

                                <h1 class="  titulo2 " style="margin:1vh ;  !important; text-align:center; "><b>{{$prog->pro_Hini}} - {{$prog->pro_Hfin}}</b></h1>

                                <div class="card-body">
                                    <div class="div  rounded" style="background-color:#3c3c3b; margin-left:-2.5vh; margin-right:-2.5vh; " >
                                        <h1 class=" card-title titulo2" style="margin:1vh ;  color:white !important; margin-top:-3vh "><b>{{$prog->film_Titulo}}</b></h1>
                                        <h5 class="card-title" style="margin:1vh; color:white" >{{$prog->pro_Director}}</h5>

                                    </div>
                                <p class="card-text" style="color: black">Ver en: {{$prog->pro_ver}}</p>
                                </div>

                                <a href="{{url('/pelicula/'.$prog->id)}}" style="margin: 2.5vh" >
                                    <button type="button" class="btn btn-outline-dark"> Ver Película</button>
                                </a>


                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                @endif

            @endforeach


            <div class="div" style="margin-top:5vh; margin-bottom:7vh">
                <h1 class="titulo" style="text-align: center">AGENDA 2020</h1>
            </div>

            <div id="accordion" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                @foreach($fecha as $fecha)
                <div class="card">
                    <div class="card-header " id="headingOne">
                      <h5 class="mb-0" >
                        <button class="btn btn-link" style="width:100%; text-align:left;" data-toggle="collapse" data-target="#collapseOne{{$fecha["id"]}}" aria-expanded="true" aria-controls="collapseOne">
                            <img src="{{ asset('storage/app/public').'/'. $fecha->imgfecha}}" alt="foto" width="90px" height="70px">  <!--se debe agregar php artisan storage:link-->
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne{{$fecha["id"]}}" class="collapse  " style="background-color: silver;" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="row" style="margin-left: 1px;">


                        @foreach($pro2 as $prog)
                        @if( $fecha["id"] == $prog->pro_Fecha)
                        <div class="card-body col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" style="">
                            <div class="card" style="width: 100%; height:200px;background-color:#f8b21e !important">

                                <h1 class="  titulo2" style="margin:1vh ;  !important; margin-top:"><b></b></h1>

                                <div class="card-body">
                                    <div class="div rounded" style="background-color:#3c3c3b; margin-left:-2.5vh; margin-right:-2.5vh; " >
                                        <h1 class=" card-title titulo2" style="margin:1vh ;  color:white !important; margin-top:-3vh "><b>{{$prog->film_Titulo}}</b></h1>
                                        <h5 class="card-title" style="margin:1vh; color:white" >{{$prog->pro_Director}}</h5>

                                    </div>
                                  <p class="card-text" style="color: black">Ver en: {{$prog->pro_ver}}</p>
                                  <!--<a href="#" class="btn btn-warning">Ver Películaaaa</a>-->
                                </div>
                              </div>
                        </div>
                        @endif





                        @endforeach



                      </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div>

            <br>
            <br>
            <br>

        @include('components/footer')
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
    </body>
</html>
