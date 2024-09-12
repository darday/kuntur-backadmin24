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

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet" href="css/carousel.css" >
        <link rel="stylesheet" href="css/sponsor.css">


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

            
            .dropdown:hover>.dropdown-menu {
              display: block;
            }
            .dropdown-menu {
              margin: -0.125rem 0 0;
            }

        </style>
    </head>
    <body>




        @include('components/navBar')

        <div class="cont_img">
            <img src="../img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
            <!--<div class="text_cent_img"><h1 class="tit-sob-img animated zoomIn">Jurado</h1></div>
            <div class="text_cent_img2 animated zoomIn"><p class="tit-sob-img2">IX FESTIVAL DE CINE KUNTURÑAWI</p></div>-->

        </div>

          @include('components/redessociales')

        <div class="container container2">
            <br><br><br>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="padding-right:4%">

                    <h1  class="titulo" >JURADO 2020</h1 >
                    <br><br>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <h1  class="titulo2" style="font-size: 2.5rem" >Cristobal D'Onofrio</h1 >
                        <hr style="height:1px !important"  color="#636b6f">
                        <h4>JURADO DE LARGOMETRAJES</h4>
                        <p style="font-size: 1.1rem"> 
                        Máster en dirección y producción audiovisual por la Universidad de Kingston, es director y
                        productor audiovisual. Inició su carrera en el mundo del cine publicitario. Formó parte del
                        equipo de producción de varios proyectos internacionales rodados en el Ecuador.
                        En 2014 formó parte del Jurado Joven en la 42 edición del Festival Internacional de Cine de
                        Huesca, España. Ha producido y dirigido contenidos para medios digitales y tradicionales.
                        Actualmente forma parte del equipo de la Unidad de Control Técnico de la Dirección de
                        Fomento al Cine y Audiovisual del Instituto de Fomento a la Creatividad y la Innovación IFCI.
                        </p>

                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <img src="../img/jurado/cristobal.jpg" class="responsive" alt="Responsive image">
                </div>
            </div>
            
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <img src="../img/jurado/dennis.jpeg" class="responsive" alt="Responsive image">
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">

                    <h1  class="titulo2" style="font-size: 2.5rem" >Denis Daniilidis</h1 >
                    <hr style="height:1px !important"  color="#636b6f">
                    <h4>JURADO DE LARGOMETRAJES </h4>
                    <p style="font-size: 1.1rem">
                        Denis Daniilidis es un diplomatico de la Union Europea con un interes y experiencia particular en la diplomacia publica e intercambios culturales.
                        Internacionalista poliglota entro a las instituciones europeas en 1992 y al servicio diplomatico europeo en 1995. Ha ocupado posiciones en Kyiv 
                        (Ucrania), Caracas (Venezuela), Moscu (Rusia), Ashgabad (Turkmenistan) y Baku (Azerbaiyan). Actualmente esta en Bruselas ocupandose de las relaciones
                        entre la Union Europea y Argentina. Denis tiene amplia experiencia en la creacion y organizacion de eventos de visibilidad y de intercambio cultural.
                        Ha creado programas de television y radio, festivales y campanas promoviendo los derechos humanos, la tolerancia y el patrimonio cultural. Cinefilo 
                        asiduo, ha promovido festivales de cine generales y tematicos en varios paises. En su mas reciente destino, en Baku, en cooperacion con un grupo de
                        activistas y cinefilos locales ha lanzado el primer festival de cine documental, bajo el titulo DOCUBAKU. Fue miembro del jurado para la eleccion 
                        del mejor cortometraje en 2019. En el marco de otro festival de cine siempre en Baku, gracias a sus contactos personales se ha podido atraer peliculas 
                        ecuatorianas que se presentaron por primera vez al publico local.
                    </p>
                </div>
            </div>
            
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <h1  class="titulo2" style="font-size: 2.5rem" >Rocío Gómez S.</h1 >
                        <hr style="height:1px !important"  color="#636b6f">
                        <h4>JURADO DE LARGOMETRAJES</h4>
                        <p style="font-size: 1.1rem"> 
                            Originaria del Pueblo Kitu Kara. Estudió Comunicación Social en la Universidad Central del Ecuador, Comunicación Intercultural en la Universidad 
                            Intercultural Amawtay Wasi y Antropología Visual en la FLACSO. He participado en talleres de profesionalización cinematográfica a nivel nacional e 
                            internacional.Sostengo que el audiovisual y el cine son herramientas políticas y  artísticas fundamentales para visibilizar los pueblos originarios 
                            y que el arte es el acto más político del ser humano.<br>
                            Productora y gestora en varios realizaciones comunitarias, indígenas y de bajo presupuesto cuyos objetivos son fortalecer la organización y la cosmovisión
                            de los pueblos originarios. Soy gestora y activista de la Cultura productora General festival Multiciplinario “Quema de Chamiza”. Me he desempeñado como educadora 
                            comunitaria, soy danzante parte activa de la Corporación Kinde, Taller Cultural, y de la Asociación de Creadores del cine y el Audiovisual de los pueblos y 
                            nacionalidades ACAPANA. <br>
                            Ha participado en festivales, muestras, conversatorios a nivel nacional e internacional. Ha sido acreedora del Premio “Mushuk Nina” 
                            por el aporte a los pueblos y nacionalidades con el arte audiovisual. 2017, de la Administración Zonal la Delicia por el aporte al 
                            desarrollo de la Cultura. 2017. Y en el festival Kikinyari el premio al mejor cortometraje experimental 2015. 
                            

                        </p>

                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <img src="../img/jurado/Rocio.jpg" class="responsive" alt="Responsive image">
                </div>
            </div>





<BR>
<BR>
<BR>
<BR>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <img src="../img/jurado/elsa.jpeg" class="responsive" alt="Responsive image">
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">

                    <h1  class="titulo2" style="font-size: 2.5rem" >Elsa Cortez</h1 >
                    <hr style="height:1px !important"  color="#636b6f">
                    <h4>JURADO DE CORTOS UNIVERSITARIOS</h4>
                    <p style="font-size: 1.1rem">Comunicadora, docente y gestora cultural, desde 2010 estoy dedicada a la formación y promoción de las artes y la cultura en los jóvenes a través de la producción de proyectos como Festival Intercolegial de Cine y la Bienal de Arte Urbano "Cartografías paganas", y de la tutoría de proyectos culturales universitarios</p>

                </div>


            </div>

            <br><br>
            <br><br>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <h1  class="titulo2" style="font-size: 2.5rem" >Marcela Camacho Pardo</h1 >
                        <hr style="height:1px !important"  color="#636b6f">
                        <h4>JURADO DE CORTOS UNIVERSITARIOS</h4>
                        <p style="font-size: 1.1rem"> Marcela Camacho Pardo, Ambato 1986. Estudió Medios Digitales en Cine y Televisión en la Universidad San Francisco 
                            de Quito; con una sub especialización en Artes Escénicas en la misma universidad. Desde el 2009 empieza con la implementación para el desarrollo 
                            de proyectos de emprendimiento y arte como cine, teatro y audiovisual; directora, productora y gestora cultural. Producción, reportería, edición y 
                            coordinación de noticias en canales nacionales como Ecuavisa y Teleamazonas. Presidenta de ADEC Asociación de Documentalistas del Ecuador, miembra de
                            la Colectiva Mujeres Acción CAM, directora de GESTIONARTES ECUADOR y Community Manager.
                        </p>

                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <img src="../img/jurado/camacho.jpg" class="responsive" alt="Responsive image">


                </div>


            </div>


            <br><br><br>

           

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <img src="../img/jurado/diegogui.jpeg" class="responsive" alt="Responsive image">
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">

                    <h1  class="titulo2" style="font-size: 2.5rem" >Diego Vallejo</h1 >
                    <hr style="height:1px !important"  color="#636b6f">
                    <h4>JURADO DE CORTOS UNIVERSITARIOS</h4>
                    <p style="font-size: 1.1rem">Diego Guillermo Vallejo Samaniego es un comunicador social graduado en la Universidad Central de Quito, con una maestría en 
                        Comunicación Organizacional en el mismo centro de estudios superior. Con 22 años de experiencia en el ámbito periodístico, ha colaborado en medios tradicionales: 
                        radio, televisión y prensa, y también se ha relacionado con las nuevas tecnologías de la comunicación e información. Durante su carrera, con énfasis en medios 
                        impresos, ha practicado un periodismo ciudadano y comunitario. Ha sido editor de revistas y libros, y es el creador del blog “Historias de Riobamba”, en el cual
                        rescata los valores, tradiciones y personajes de la Sultana de los Andes. En el ámbito creativo y audiovisual ha escrito cuentos, una novela y también ha dirigido
                        videoclips, cortometrajes y obras de teatro.
                    </p>

                </div>


            </div>
            
            <br><br>
            <br><br>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <h1  class="titulo2" style="font-size: 2.5rem" >Carlos Villavicencio</h1 >
                        <hr style="height:1px !important"  color="#636b6f">
                        <h4>JURADO DE CORTOS</h4>
                        <p style="font-size: 1.1rem"> Graduado del instituto de Cine, 2014  (INCINE). Licenciado de crítica de cine y teatro, diploma obtenido en la Academia de Artes
                        Teatrales de Moscú, 2020 (GITIS)
                        </p>

                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" style="padding-right:4%">
                    <img src="../img/equipo/carlos.jpg" class="responsive" alt="Responsive image">


                </div>


            </div>
            
            
            <br><br>
            <br><br>

            


        </div>
        <br>
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
