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
            <!--<div class="text_cent_img"><h1 class="tit-sob-img animated zoomIn">EQUIPO </h1></div>
            <div class="text_cent_img2 animated zoomIn"><p class="tit-sob-img2">IX FESTIVAL DE CINE KUNTURÑAWI</p></div>-->

        </div>


        @include('components/redessociales')

        <div class="container">
            <br><br><br>
            <div class="row wow animated fadeIn ">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="padding-right:4%">

                    <h1  class="titulo" >EQUIPO 2020</h1 >
                    <hr style="height:1px !important"  color="#636b6f">
                    <br><br>
                </div>
            </div>


        </div>

        <div class="container ">

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src='img/equipo/piedad_zurita.jpg' class='imgRedondaSSS' width="90%" />
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                    <h1 class="titulo2" style="font-size: 2.0em"><b>Piedad Zurita</b></h1>
                                    <h1 class="titulo2">DIRECTORA Y FUNDADORA DEL FESTIVAL</h1>
                                    <p>Gestora Cultural, Ingeniera en Administración, Mención Gerencia, egresada de la Maestría en Gestión Cultural UASBB. 
                                    Su formación ha estado vinculada en el campo de las Políticas Culturales. Desde el año 1998 viene aportando al desarrollo 
                                    de la cultura a través de la creación y ejecución de proyectos culturales locales, regionales, nacionales y mundiales. Trabajó 
                                    (febrero 1987 hasta agosto del 2000) en la CCE Núcleo de Chimborazo. En año 2000 junto a artistas indígenas y mestizos, crean la Fundación Arte Nativo,
                                    para la investigación, divulgación, preservación del patrimonio cultural tangible e intangible, la promoción y difusión cultural.
                                    </p>
                                    <p>
                                       Ha creado y dirigido los siguientes proyectos: Revitalización Cultural en Ozogoche: Festival de Cultural Vivas, tributo de las aves 
                                       cuvivis” (2002-2014), transferido a las organizaciones indígenas que ejecutan hasta la presente el 18avo año 2019; “Fortalecimiento 
                                       de la autodeterminación de las mujeres y niñas de la Comuna indígenas de La Moya, Riobamba-Chimborazo a través del arte (2018-2021); 
                                       Festival de Cine Ecuatoriano Kunturñawi (2006-2021), siendo su fundadora y actual directora, en ejecución la X Edición; Desde el 2003
                                       hasta la presente, impulsa Cine Clubes Kunturñawi en Escuelas, Colegios, Universidades, Comunidades Indígenas y la ciudad; dirige el 
                                       Festival Infantil-Juvenil Wawas al Cine (2014-2021 ); Festival de Cine Kunturñawi Internacional en Francia (2007), Alemania (2010), 
                                       Colombia (2011), Canadá (2017), España (2019).
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src='img/equipo/jona2.jpg' class='imgRedondaSSS' width="90%" />
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                    <h1 class="titulo2" style="font-size: 2.0em"><b>Jonathan Carrasco</b></h1>
                                    <h1 class="titulo2">TÉCNICO</h1>
                                    <p>Parte del equipo técnico en el VIII festival de cine ecuatoriano Kunturñawi.<br>
                                        
                                        Ha trabajado en la pre-producción, producción y post-producción de cortometrajes universitarios,
                                        principalmente en el departamento de sonido. <br>Producción del largometraje sobre
                                        los Latin King de la realizadora Julie Tome en el departamento de sonido directo.
                                        También organizó en conjunto con la Fundación Arte Nativo la proyección pública
                                        de cortometrajes realizados por estudiantes de la Universidad de las Artes.
                                         Además estuvo en la selección de la 32 edición del Festival Cine Latino de
                                         Toulouse en un proyecto conjunto a cargo de un docente de la Universidad.
                                          Que debido a la situación actual el Festival se canceló.</p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src='img/equipo/nati2.jpg' class='' width="90%" />

                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                    <h1 class="titulo2" style="font-size: 2.0em"><b>Natalia Guashpa Bastidas</b></h1>
                                    <h1 class="titulo2">CORDINACIÓN PROVINCIAS</h1>
                                    <p>Riobambeña, Gestora Cultural, Ingeniera en Ecoturismo de la Escuela Superior
                                         Politécnica de Chimborazo, Facilitadora de danza tradicional, Danzante en la vida.
                                          Ha trabajado en la Fundación Cultural de Arte Nativo Flores Franco y Ferrocarriles del
                                           Ecuador. Actualmente desempeña la labor como miembro del Comité Organizador del Festival
                                           de Cine Ecuatoriano Kunturñawi.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src='img/equipo/dario.jpeg' class='' width="90%" />

                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                    <h1 class="titulo2" style="font-size: 2.0em"><b>Darío Janeta</b></h1>
                                    <h1 class="titulo2">DESARROLLADOR WEB</h1>
                                     <p>Egresado de la carrera de Ingenieria en sistemas de la Escuela Superior Politécnica de Chimborazo.
                                        Productor audiovisual y promotor de las actividades de la organización Camping Chimborazo dedicada
                                        al turismo comunitario en la provincia de Chimborazo.
                                    </p>
                                    <p>
                                        Desarrollador de la página web del Congreso Internacional de Innovación y Emprendimiento INNOVAEC 2019
                                        el cual se realizó en la Escuela Superior Politécnica de Chimborazo a finales del mes de Octubre del 2019.Actualmente 
                                        administra la aplicación web del festival Kunturñawi y Wawas al Cine.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src='img/equipo/karo.png' class='' width="90%" />

                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                    <h1 class="titulo2" style="font-size: 2.0em"><b>Karo Carrasco</b></h1>
                                    <h1 class="titulo2">DISEÑADORA GRÁFICA</h1>
                                    <p>Diseñadora gráfica apasionada por la ilustración y la animación 2D, con 5 años de experiencia. 
                                    Trabaja con diversas tendencias y estilos gráficos de vanguardia aplicables a los diferentes campos del diseño, 
                                    desarrolla proyectos integrales de diseño gráfico, creación y manejo de identidad corporativa de empresas, productos o servicios, 
                                    y asesoramiento para el manejo de las mismas en redes sociales.
                                    </p>
                                    
                                    <p>
                                        En 2017 formó parte, como diseñadora gráfica, en la creación de la Escuela Integral de Formación de Artistas – EIFA avalada por 
                                        el Teatro Bolívar en la ciudad de Quito, Ecuador. @EIFAEcuador. En 2019 desarrolló el diseño del álbum “KENOPSIA” de Juan Pablo Acosta,
                                        disponible en iTunes, Spotify y Youtube. Ha trabajado con empresas como: Banco Internacional, La Red Ecuatoriana de Pedagogía, 
                                        Brinkadoteca, Teatro Victoria, Radio Victoria, entre otras. Actualmente maneja la identidad gráfica del Festival de Cine  Ecuatoriano 
                                        Kunturñawi y Wawas al cine
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src='img/equipo/galo_vasconez.jpg' class='' width="90%" />

                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                    <h1 class="titulo2" style="font-size: 2.0em"><b>Galo Vásconez</b></h1>
                                    <h1 class="titulo2">PRODUCTOR</h1>
                                    <p>Licenciado en Comunicación Social, Magister en Comunicación Audiovisual, Máster en Guión para Cine y Televisión y posee un
                                        Diplomado Superior en Docencia Universitaria.
                                    </p>
                                    <p>
                                        Se ha desempeñado laboralmente en productoras de cine y televisión, como editor y realizador, al igual que en canales de televisión nacional.
                                        Ha trabajado como docente universitario dictando cátedras de comunicación y cine. Al momento trabaja como Director de Comunicación en la Gobernación
                                        de Chimborazo.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src='img/equipo/ana_paula.jpg' class='' width="90%" />

                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                    <h1 class="titulo2" style="font-size: 2.0em"><b>Ana Paula Amado</b></h1>
                                    <h1 class="titulo2">ASESORA</h1>
                                    <p>Licenciada en literatura moderna con mención de Francés idioma extranjero y licenciada en civilización-literatura
                                        portuguesa, Profesora de Francés y de Educación Básica, titular del Ministerio de Educación Francés, con una
                                        experiencia sólida en Educación Popular y en trabajos con las comunidades rurales e indígenas de Ecuador en
                                        diferentes ONGS, formadora en talleres en temas de género, de pedagogía, de ecología, co-organizadora de eventos,
                                         de viajes internacionales de complementación académica y de participación en festival de teatro con estudiantes,
                                         de congresos, de seminarios sobre Educación innovadora, Educación Popular, es actualmente docente de francés en la
                                         UNACH y coordinadora de la Alianza Francesa sede de Riobamba. Participó en Francia y en Ecuador en varios talleres
                                         de teatro, de danza y de cine. Ha colaborado en varios eventos culturales en diferentes países.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src='img/equipo/carlos.jpg' class='' width="90%" />

                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                    <h1 class="titulo2" style="font-size: 2.0em"><b>Carlos Villavicencio.</b></h1>
                                    <h1 class="titulo2">COLABORADOR</h1>
                                    <p>Graduado del instituto de Cine, 2014  (INCINE). Licenciado de crítica de cine y teatro,
                                         diploma obtenido en la Academia de Artes Teatrales de Moscú, 2020 (GITIS)
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            
            
             <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src='img/equipo/diego.jpeg' class='' width="90%" />

                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                    <h1 class="titulo2" style="font-size: 2.0em"><b>Diego Pazmiño.</b></h1>
                                    <h1 class="titulo2">Comunicación Digital</h1>
                                    <p>Diego Pazmiño estudiante de Comunicación Digital en el Instituto Superior Tecnológico José Ortega y Gasset complementa sus estudios 
                                    con las Carreras de Producción Audiovisual, Desarrollo Web en Colombia y Marketing Digital en Argentina actualmente cursando, 
                                    experiencia en producción de cortometrajes como productor de carácter nacional e internacional llegando a ser finalista en el 
                                    Filminuto Challenge  Platzi 2020 con el cortometraje "Insignificante" gestor de equipos es apasionado de la tecnología, la fotografía
                                    y el video.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            
            
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <img src='img/equipo/chriss.jpeg' class='' width="90%" />

                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8">
                                    <h1 class="titulo2" style="font-size: 2.0em"><b>Christian Dutan Bustamante</b></h1>
                                    <h1 class="titulo2">Comunicador Digital</h1>
                                    <p>Comunicador Digital, Conductor del programa Cinema Digital en la Fanpage Comunicadores Digitales, Editor y Productor Audiovisua
                                    </p>

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
    </body>
</html>
