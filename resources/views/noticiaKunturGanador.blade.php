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
        <link href="http://fonts.cdnfonts.com/css/helvetica-neue-lt-pro" rel="stylesheet">
                

        {{-- fafa Icon --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">



        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet" href="css/carousel.css" >
        <link rel="stylesheet" href="css/sponsor.css">
        {{-- animated --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />
        <!--js-->
        <script defer src="css/js/carousel.js"></script>

        <script type="text/javascript" src="css/js/jquery.js"></script>
        
        <style>
            /* para navbadesplegable  */
            .dropdown:hover>.dropdown-menu {
              display: block;
            }
            .dropdown-menu {
              margin: -0.125rem 0 0;
            }
            html, body {
                
          
            /*  */
                background-color: #fff;
                color: black;
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



         @include('components/navBar')


        <div class="container container2 animate__animated  animate__fadeIn ">
             <br>
             <br>
             <br>
        


             <div class="div text-center">
                <h1 class="titnoti" style="text-align: left">FESTIVAL DE CINE ECUATORIANO KUNTURÑAWI DÉCIMA EDICIÓN</h1>
             </div>
             <hr>
            <div class="row ">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                        <div id="carouselExampleIndicators" class="carousel slide  "  style="width: 100%; height:auto" data-ride="carousel" data-pause="false">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                              <!-- Slide One - Set the background image for this slide in the line below -->
                              <div class="carousel-item active" style="background-image: url('img/carousel/PORTADA-BANNER3.jpg'); height:200px;  border-radius: 25px">
                                
                              </div>
                              <!-- Slide Two - Set the background image for this slide in the line below -->
                              <div class="carousel-item" style="background-image: url('img/carousel/PORTADA-BANNER2.jpg'); height:200px; border-radius: 25px">
                                <div class="carousel-caption d-none d-md-block">
                                  <!--<h2 class="display-4">Fundación Arte Nativo</h2>
                                  <p class="lead text-center">This is a description for the second slide.</p>-->
                                </div>
                              </div>
                              <!-- Slide Three - Set the background image for this slide in the line below -->
                              <div class="carousel-item" style="background-image: url('img/carousel/PORTADA-BANNER4.jpg'); height:200px;border-radius: 25px">
                                <div class="carousel-caption d-none d-md-block">
                                  <!--<h2 class="display-4">Fundación Arte Nativo</h2>
                                  <p class="lead text-center">This is a description for the third slide.</p>-->
                                </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                          </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                        <br>
                        <br>
                        <p>El viernes 26 de noviembre, se cumplió la X Edición del Festival de Cine Ecuatoriano Kunturñawi, organizado por Fundación Arte Nativo, 
                            con las Universidades Espoch Riobamba, UNACH,  UArtes, Prefectura de Chimborazo. Alcaldia Municipal de Guaranda, Latacunga y Puyo.
                             Casa De La Cultura Núcleo De Chimborazo y Pastaza 
                        </p>

                        <p>Las películas que recibieron menciones fueron:</p>
            
                        <p>
                            MENCIÓN A LOS MEJORES CORTOS INTERNACIONALES:<br> FICCIÓN Y DOCUMENTAL. “Sálvame” de Mohsen Nabavi de Irán; “Mamapara” 
                            de Alberto Flores Vilca de Perú.
                        </p>
                        <p>
                            MENCION A LOS MEJORES CORTOS UNIVERSITARIOS: <br>
                            FICCIÓN: “Formulario MT2404” de Marcela Roura.<br>
                            DOCUMENTAL: “Memorias de un roble” de Christian Lavayen.<br>

                        </p>
                        <p>
                            MENCIONES ESPECIALES POR LA CATEGORÍA DE LARGOMETRAJES: <br>
                            -Mejor Investigación a “La Leyenda de Tayos” de Galo Semblantes (@galosemblantes )<br>
                            -Mejor diseño de producción a “Muerte en Berruecos” de Caupolicán Ovalles<br>
                            -Por decisión del jurado, el documental “ROLO” de Gabriela Coka (@coka_gabriela) <br>
                            -Mejor dirección, edición, a la película “Sumergible” de Alfredo León León (@alfreal11)<br>
                        </p>
                    </div>

            </div>

            <div class="container animated fadeInUp">
                    <div class="row ">
                        <h1>Fotos</h1>
                        <a href="img/carousel-premiacion/1.jpeg" class="gallery-img salto col-12 col-sm-6 col-lg-3"  title="Galería Kunturñawi">
                            <img src="url(img/carousel-premiacion/1.jpeg" alt="" class="responsive">
                        </a>
                        <br>
    
                        <!--------------------------------------------------------->
                    </div>
                </div>
           


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
