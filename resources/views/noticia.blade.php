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



         @include('components/navBar2')


        <div class="container container2 animated fadeInUp ">
             <br>
             <br>
             <br>
             @if(Session::has('Mensaje'))
                        <div class="alert alert-success" role="alert">
                        {{Session::get('Mensaje')}}
                    </div>
                    @endif


             <div class="div text-center">
                <h1 class="titnoti" style="text-align: left">{{$noticia->Not_Titulo}}</h1>
             </div>
             <hr>
            <div class="row ">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                        <img src="{{ asset('storage/app/public').'/'. $noticia->Not_imagen}}" alt="foto" class="responsive" >  <!--se debe agregar php artisan storage:link-->
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                        <textarea  readonly class="form-control" id="exampleFormControlTextarea1" style="font-size:px; background-color:white; border-color:white;"  name="descripcion" rows="15" cols="80" required>{{ $noticia->Not_Descripcion }}</textarea>
                    </div>

            </div>
            <p>{{$noticia->Not_ImgDesc}}</p>
            <p style="margin-top:-23px">{{$noticia->Not_Fecha}}</p>
            <br>


                 <div style="text-align: left; padding-top:30px; padding-bottom:20px ">

                    <a href="{{ url('/noticias') }}">
                        <button type="button" class="btn btn-outline-dark">
                            {{ __('VOLVER A NOTICIAS') }}
                        </button>
                    </a>
                </div>



        </div>



        </div>

        @include('components/footer')
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
    </body>
</html>
