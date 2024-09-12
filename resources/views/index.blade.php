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
              
        {{-- animated --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


        {{-- fafa Icon --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">



        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet" href="css/carousel.css" >
        <link rel="stylesheet" href="css/sponsor.css">

        <!--js-->
        <script defer src="css/js/carousel.js"></script>

        <script type="text/javascript" src="css/js/jquery.js"></script>
        

        <style type="text/css">
            .ellipsis {
              text-overflow: ellipsis;
              white-space: nowrap;
              overflow: hidden;
             }
            .short { width: auto%; }

 
        </style>


        <style>
            html, body {
                background-color: #fff;
                color: #51575a;
                font-family: 'Helvetica Neue LT Pro 300', sans-serif;
                font-weight: 200;
                height: auto;
               margin: 0;
            }

            .full-height {
                height: auto;
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

            .carousel-indicators li {
                width: 10px;
                height: 10px;
                border-radius: auto%;
            }

            .container-fluid {
                height: 90%;
                width: auto%;
            }

            .carousel-inner img {
            height: 325px;
            }

            /* para navbadesplegable  */
            .dropdown:hover>.dropdown-menu {
              display: block;
            }
            .dropdown-menu {
              margin: -0.125rem 0 0;
            }

        </style>

        


    </head>
    <body class="animated fadeIn">




        @include('components/navBar')

        {{-- <div class="cont_img">
            <img src="img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
            <!--<div class="text_cent_img animated zoomIn"><h1 class="tit-sob-img">INICIO</h1></div>
            <div class="text_cent_img2 animated zoomIn"><p class="tit-sob-img2">IX FESTIVAL DE CINE KUNTURÑAWI</p></div>-->

        </div>
         --}}

         {{-- Carousel --}}
         <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000"  style="background-image: url('img/carousel/PORTADA_INICIO.jpg') ;  ">
              {{-- <div style="background-color:rgba(43, 39, 39, 0.397) ; width:auto%; height350pxp" >
     250px     </div> --}}
                    
            </div>
            <div class="carousel-item" data-bs-interval="4000" style="background-image: url('img/carousel/PORTADA_INICIO.jpg') ">
              {{-- <div style=" width:auto%; height350pxp; backgro250pxcolor:rgba(43, 39, 39, 0.397)" >
              </div> --}}
            </div>
            <div class="carousel-item"  data-bs-interval="4000" style="background-image: url('img/carousel/PORTADA_INICIO.jpg') ">
        
              <div style=" width:auto%; height350pxp" >
            {{-- <div style=" width:auto%; height350pxp; backgro250pxcolor:rgba(43, 39, 39, 0.397)" >
                </div> --}}
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
         
         {{-- Carousel --}}

        {{-- @include('components/redessociales') --}}

        {{-- <h1 style="text-align: center; margin-top:5vh" class="titulo2">Encuentranos en:</h1>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="margin-bottom: 5vh; margin-top:2vh">
          <a href="https://www.facebook.com/KunturnawiCine"><img src="img/logos/face.png" width="85px" alt=""></a>
          <a href="https://www.instagram.com/kunturnawi/?hl=es-la"><img src="img/logos/insta.webp" width="72px" alt=""></a>
          <a href="https://www.youtube.com/channel/UCplMYDazTGjVJNxukH17EzA"><img src="img/logos/youtube.webp" width="60px" alt="" style="margin-left: 1vh"></a>
          {{-- <hr style="height:1px;border:none;color:#f8b21e;background-color:#f8b21e; " /> --}}
        {{-- </div>  --}}
   
    <div class="container "  style=" text-align:center; margin-top:5vh">
        <br/>
        
            <h3></i>DESCARGA AQUÍ MÁS INFORMACIÓN</h3>
            <a href="docs/FICHA2021.pdf" download="Ficha_Inscripcion_2021">
                <button type="button" class="btn btn-outline-dark btn-lg"><b>FICHA DE INSCRIPCIÓN 2021</b></button>
            </a>
            <a href="docs/BASES2021.pdf" download="Bases_Festival_2021">
                <button type="button" class="btn btn-outline-dark btn-lg"><b>BASES DEL FESTIVAL 2021</b></button>
            </a>
        </div>
    <br>
    <br/>
    
    <div class="container" style="background-color: #5a465f6b; padding:8vh;border-radius: 25px">

      <div class="row">
        <div class="col-lg-6">
          <div id="carouselExampleIndicators" class="carousel slide animated fadeInUp "  style="width: auto%; height350pxo" data-ride="carousel" data-pause="false">
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
        <div class="col-lg-6">
          
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="padding-left:; ">
            <h3>FESTIVAL DE CINE ECUATORIANO KUNTURÑAWI</h3>
            <p>Kunturñawi viene del idioma nativo kichwa significa: Kuntur=Cóndor y Ñawi=ojo; se crea en noviembre del 2006, ante la necesidad de difundir las obras 
            cinematográficas y audiovisuales que se produce en Ecuador. La pandemia del Covid-19, no ha desfallecido nuestro ímpetu por seguir haciendo realidad 
            descentralización del cine, abriendo espacios para su difusión, valoración de obras y autores, inspirar la formación de públicos en la región del centro del país: 
            estudiantes de nivel medio y superior, comunidades indígenas, mercados y sectores vulnerables que no tienen acceso al cine como es su derecho. </p>

            {{-- <p>El Kunturñawi, es un festival de competencia en las categorías: largometraje documental y ficción, y cortometrajes: ficción, animación y documental; y la categoría cortos universitarios.  
            La décima edición por segundo año será presencial y Online y recorrerá las provincias de Bolívar, Tungurahua, Pastaza, Cotopaxi y Chimborazo, cómo única 
            ventana de acceder al cine de Ecuador.</p>
            <p>Paralelamente el Festival desarrolla actividades de formación cinematográfica, vinculando a las universidades de Cine: INCINE, UARTES, UDLA, con comunidades indígenas, para fortalecer al cine como una potencial herramienta para la revitalizar la memoria social, identidad, sensibilizarnos sobre nuestras realidades, fortalecer la estima y visionar mejores amaneceres. El Festival atiende las demandas sobre el acceso a la cultura y la legitimidad de los derechos culturales para ciudadanas/os.</p>
            <p>Son quince años que se han proyectado mas de 300 películas ecuatorianas de calidad, con temáticas diversas, como así es el país, con la particularidad de contar con la participación en los foros de los directores, realizadores y actores que han contrastado con el publico sus obras.</p> --}}
            <button type="button" class="btn btn-link" ><a href="{{url('/festival-kuntur')}}">Leer más</a> </button>

          </div>
        </div>
      </div>
            
              
    </div>

    

    <div class="container container2" style="margin-top: 10vh;">
      <h1 class="titulo" style="text-align: left" >Selección oficial 2021</h1>
      <br>
    </div>
        <div class="Carousel" style=" margin-bottom:10vh; background-color:red; padding:10vh">
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                    @foreach($film as $film)
                    <div class="slick">
                        <div>
                            <a href="{{url('/pelicula/'.$film->id)}}">
                                <h4><small>{{$film->film_Titulo}}</small>Ver</h4>
                                <picture>
                                    <img src="{{ asset('storage/app/public').'/'. $film->film_imagen}}" class="zoom" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                @endforeach
                </div>
                <button class="slick-arrow slick-next" id="button-next">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>
        </div>


        <div class="container " >
{{-- 
            <h1 class="titulo"  >EL FESTIVAL</h1>
            <hr style="height:5px;border:none;color:#f8b21e;background-color:#f8b21e; margin-top:-1vh" />



            <!--<div class="text-center" style="margin-top: 0vh; margin-left:-3%; margin-right:-3%">
                <div class="card " style="height:80px">
                    <div class="card-body text-center row" style="background-color:#f8b21e">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left" style="margin-top: -10px">
                            <h1 class="titulo" style="font-family:calibri !important" ><b>EL FESTIVAL</b></h1>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right" style="margin-bottom: -20px; margin-top:-20px">
                            <a href="https://www.facebook.com/KunturnawiCine"><img src="../img/logos/face.png" width="85px" alt=""></a>
                            <a href="https://www.instagram.com/kunturnawi/?hl=es-la"><img src="../img/logos/insta.webp" width="70px" alt=""></a>
                            <a href="https://www.youtube.com/channel/UCplMYDazTGjVJNxukH17EzA"><img src="../img/logos/youtube.webp" width="55px" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>-->

            <div class="text-center" style="margin-bottom: 5vh; margin-top:5vh;">
                <div class="card-group " >
                    <div class="card border-0" style="align-items: center; ">
                      <img  class="" style="margin-top:3vh" src="img/logos/ICONO-FESTIVAL.png" width="100px" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Kunturñawi</h5>

                      </div>
                    </div>
                    <div class="card border-0" style="align-items: center; ">
                      <img  class="" style="margin-top:3vh" src="img/logos/CLAQUETA-ICONO.png" width="100px" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">+auto Films Pr350pxtados</h5>

                      </div>
                    </div>
                    <div class="card border-0" style="align-items: center; ">
                      <img  class="rounded-circle" style="margin-top:3vh" src="img/logos/ICONO-UBICACION.png" width="100px"  alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">4 Provincias</h5>

                      </div>
                    </div>
                    <div class="card border-0" style="align-items: center; ">
                      <img  class="rounded-circle" style="margin-top:3vh" src="img/logos/8-ICONO.png" width="100px" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Organizador</h5>

                      </div>
                    </div>



                </div>

            </div> --}}

            <!--**************ENCUENTRANOS EN*********************-->
         
            
            
            
           
            {{-- <hr style="height:1px;border:none;color:#f8b21e;background-color:#f8b21e; " /> --}}
            {{-- <hr style="height:5px;border:none;color:#f8b21e;background-color:#f8b21e; margin-top:-1vh" /> --}}






            <!--*********************Noticias***************************-->
                <div class="row " style="background-color: rgb(252, 230, 230);padding:8vh;padding-top:2vh;border-radius: 25px">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left" style="">
                      <h1 class="titulo">Últimas Noticias</h1>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right" style="margin-bottom: -20px; margin-top:">
                      <a href="{{ url('/noticias') }} " style="text-decoration: none;"><h5 style="padding-top:2.5vh; ">Ver todas las noticias</h5></a> 
                    </div>
                            

                  <div class="col-lg-6" style="padding-top: 5vh;padding-bottom:3vh">
                     @foreach($last as $last)

                    <div class=" text-center" style="">
                        <div id="mainwrapper">
                            <div class="card" style="width:100%;height: auto; ">
                                    <a href="{{url('/noticia/'.$last->id)}}" >
                                    <img src="{{ asset('storage/app/public').'/'. $last->Not_imagen}}" class="card-img-top" style="width: 100%; height: auto;" alt="...">
                                </a>
                                <div class="card-body">
                                  <h5 class="card-title text-center"><b><strong>{{$last->Not_Titulo}}</strong></b></h5>
                                  <p class="card-text ellipsis text-center">{{$last->Not_Descripcion}}</p>
                                  <a href="{{url('/noticia/'.$last->id)}}" class="btn btn-warning" style="background-color: #f8b21e">Leer más</a>
                                </div>
                              </div>
                        </div>
                    </div>


                    @endforeach
                  </div>

                  <div class="col-lg-6" style="width:100%;height: auto; ">
                    @foreach($noticias2 as $noticias)
                          <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <a href="{{url('/noticia/'.$noticias->id)}}" >
                                  <img src="{{ asset('storage/app/public').'/'. $noticias->Not_imagen}}" class="img-fluid rounded-start" style="width: auto%; height350pxto;" alt="...">

                              </a>
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title text-left"><b><strong>{{$noticias->Not_Titulo}}</strong></b></h5>
                                  <p class="card-text ellipsis TE">{{$noticias->Not_Descripcion}}</p>
                                  <a href="{{url('/noticia/'.$noticias->id)}}" class="btn btn-warning" style="background-color: #f8b21e">Leer más</a>
                                </div>
                              </div>
                            </div>
                          </div>

                      


                    @endforeach
                    <div class="row">       </div>
                    
                  </div>

                    {{-- @foreach($noticias as $noticias)

                        <br>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-left" style="padding-top: 20px">
                        <div id="mainwrapper">
                            <div class="card" style="width: auto%; height350pxto; ">
                                <a href="{{url('/noticia/'.$noticias->id)}}" >
                                    <img src="{{ asset('storage/app/public').'/'. $noticias->Not_imagen}}" class="card-img-top" style="width: auto%; height350pxto;" alt="...">

                                </a>

                                <div class="card-body">
                                  <h7 class="card-title text-left"><b><strong>{{$noticias->Not_Titulo}}</strong></b></h7>
                                  <p class="card-text ellipsis TE">{{$noticias->Not_Descripcion}}</p>
                                  <a href="{{url('/noticia/'.$noticias->id)}}" class="btn btn-warning" style="background-color: #f8b21e">Leer más</a>
                                </div>
                              </div>
                        </div>
                    </div>


                    @endforeach --}}
                        <!--------------------------------------------------------->
                </div>

                <div class="row " style="margin-bottom: 10vh;padding-top:10vh ">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                        <h1 class="titulo">Auspiciantes</h1><br><br>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                        {{-- <img src="img/logos/auspiciantes.jpg" class="responsive"> --}}

                        <div class="slider">
                          <div class="slide-track">
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="auto" width="350px" alt="" />
                              </div>
                              <div class="slide">
                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="auto" width="350px" alt="" />
                              </div>
                          </div>
                      </div>

                        
                    </div>

                    <br>
                    <br>
                    <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                      {{-- <img src="img/logos/auspiciantes.jpg" class="responsive"> --}}

                      <div class="slider">
                        <div class="slide-track">
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="auto" width="350px" alt="" />
                            </div>
                            <div class="slide">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="auto" width="350px" alt="" />
                            </div>
                        </div>
                    </div>

                      
                  </div>




                </div>




        </div>
      </div>
        @include('components/footer')



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>

</html>
