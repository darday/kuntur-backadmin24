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

        <script type="text/javascript" src="css/js/jquery.js"></script>

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
            <!--<div class="text_cent_img"><h1 class="tit-sob-img animated zoomIn">TALLERES</h1></div>
            <div class="text_cent_img2 animated zoomIn"><p class="tit-sob-img2">IX FESTIVAL DE CINE KUNTURÑAWI</p></div>-->

        </div>

        @include('components/redessociales')


        <div class="container container2">

            <div class="div" style="margin-top:7vh; margin-bottom:5vh">
                <h1 class="titulo tit-sob-img" style="text-align: center">INSCRIPCIÓN A TALLERES Y CHARLAS</h1>
                <!--<h5 class="titulo" style="text-align: center">Las inscripciones a los talleres se habilitarán desde el Martes 03 de Noviembre 19:00</h5>-->

          
            </div>

            <!--desde aqui-->

            <div class="row" style="margin-bottom: 5vh">

                @foreach($taller as $taller)
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" style:"margin-top:5vh;" >
                    <div class="card" style="width: 100%; height:auto; margin-top:5vh;">
                        <img class="card-img-top" src="{{ asset('storage/app/public').'/'. $taller->Tall_imagen}}"  alt="Card image cap" style="Width:100%; height:auto">
                        <div class="card-body">
                          <h4 class="card-title">{{$taller->Tall_titulo}}</h4>
                          <h5> Inicio: {{$taller->Tall_fecha}}</h5>
                          <h5> Hora: {{$taller->Tall_hora}}</h5>
                          <p class="card-text">{{$taller->Tall_descripcion}}</p>

                            <div class="div text-center" style="align-content: center">
                                @if(($taller->Tall_estado) == 'Lleno')
                                    <b>
                                        YA NO QUEDAN CUPOS DISPONIBLES <br>
                                    </b>
                                    @else

                                        <a  href="{{$taller->Tall_url}}" style="align-content: center" class="btn btn-warning">Inscribirse</a>

                                    @endif
                            </div>

                      </div>
                    </div>

                </div>
                @endforeach


            </div>

            <!--Hasta aqui-->






            <!--hasta Aqui-->
        </div>

        @include('components/footer')
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
    </body>
</html>
