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
        </style>
    </head>
    <body>




        @include('components/navBar')

        <div class="cont_img">
            <img src="img/carousel/PORTADA_INICIO.jpg" class="responsive" alt="Responsive image">
            <!--<div class="text_cent_img"><h1 class="tit-sob-img animated zoomIn">BASES </h1></div>
            <div class="text_cent_img2 animated zoomIn"><p class="tit-sob-img2">IX FESTIVAL DE CINE KUNTURÑAWI</p></div>-->

          </div>

          @include('components/redessociales')

        <div class="container" style="width: 70% !important;">
            <br><br><br>
            <div class="row wow animated fadeIn ">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="padding-right:4%">

                    <h1  class="titulo" >EL FESTIVAL</h1 >

                    <p style="color: black">
                        Fundación Arte Nativo, Gad Municipal de Ambato, Gad Municipal de Guaranda, Universidad Nacional de Chimborazo, Escuela Superior Politécnica de
                         Chimborazo, Casas de la Cultura Núcleos de Bolívar y Pastaza y Cine Club Kunturñawi, convocan a participar en el VIII FESTIVAL DE CINE
                         ECUATORIANO “KUNTURÑAWI” (El Ojo del Cóndor), del 5 al 29 de noviembre del 2019, en las Provincias de: Bolívar, Tungurahua, Pastaza y Chimborazo.<br>

Ficha de Inscripción<br>

1. El cineasta participante deberá llenar y entregar la ficha de inscripción, disponible en: www.kunturnawi.com y enviarla por e-mail festivalcinekunturnawi@gmail.com o subir por la misma página web.
<br>
2. Deberá incluir la información del trabajo: sinopsis, título original, año de producción, duración, nombres del director o directores y sus fotografías, reparto, guión, música, fotografía, sonido, dirección de arte, productora, género, link del tráiler y portada de la película (formato A3, png).
<br>
3. Los trabajos deben entregarse, en formato: Digital (plataforma Vimeo, We-Transfer u otra) o tres ejemplares en DVD o Bluray, independientemente de su formato original.
<br>
4. Cada DVD o Bluray en físico, deberá incluir las siguientes etiquetas: Título de la obra, duración de la obra, categoría participante, nombre del director y año de producción.
<br>
5. Los trabajos deberán ser enviados o entregados en la oficina: Fundación Arte Nativo: ubicada en calle Juan de Velasco 20-60 y Guayaquil, Riobamba-Ecuador, teléfonos 03-2943168 – 0992774388 – 0939212520.
<br>
6. Los trabajos se receptarán a partir del lunes 30 de junio hasta el viernes 16 de Agosto del 2019.
<br>
<br>
BASES DEL FESTIVAL VIII FESTIVAL DE CINE ECUATORIANO KUNTURÑAWI<br>

1. Podrán participar las producciones cinematográficas realizadas por: ciudadanos/as ecuatorianos/as, y/o ecuatorianos/as en colaboración con extranjeros; y extranjeros que residan en el país al menos durante los últimos cinco años.
<br>
2. Podrán inscribirse todas las obras realizadas desde el 2015 hasta Agosto del 2019.
<br>
3. Los filmes con idioma diferente al habla hispana deberán contener subtítulos en español.
<br>
4. La temática de los trabajos participantes es libre.
<br>
5. No existe un límite de obras por realizador, productor o productora, sin embargo, cada trabajo deberá registrarse y enviarse de manera individual.
<br>
6. Si la película es seleccionada, no podrá ser retirada de la programación del Festival.<br><br>
CATEGORÍAS<br>

1. Largometraje Ficción
<br>
2. Largometraje Documental
<br>
3. Cortometraje Ficción
<br>
4. Cortometraje Documental
<br>
5. Cortometraje Animación
<br>
6. Corto Universitario<br>

                    </p>
                    <a href="docs/BASES2021.pdf" download="Bases2021">
                        <img src="img/logos/boton1.png" alt="imagen" width="30%"  >
                    </a>
                    <br><br>

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
