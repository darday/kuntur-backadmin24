<div>
    <!-- Navigation -->
    {{--  fixed Top quitado de nav(fixed-top) --}}
{{-- <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top " id="menu navbar1" > --}}
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top " id="menu navbar1" >
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" style="background-color: black" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="../img/logos/icofestival.png" alt="" height="70%" width="60%">
        </a>

        <div class="collapse navbar-collapse"   id="navbarResponsive">
            <ul class="navbar-nav "><!--ml-auto-->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>-->
                <li class="nav-item">
                <a class="nav-link menu navbar1 " href="{{ url('/') }}">Inicio</a>
                </li>
                
                <li class="nav-item dropdown" id='dmenu'  >
                    <a class="nav-link dropdown-toggle  menu navbar1" href="{{ url('/peliculas') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Películas
                    </a>
                    <div class="dropdown-menu navbar1" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item menu navbar1" href="{{url('/peliculas')}}">Todos los films</a>
                      <a class="dropdown-item menu navbar1" href="{{ url('/largometrajeficcion') }}">Largometraje Ficción</a>
                      <a class="dropdown-item menu navbar1" href="{{url('largometrajedocumental')}}">Largometraje Documental</a>
                      <a class="dropdown-item menu navbar1" href="{{url('cortometrajeficcion')}}">Cortometraje Ficción</a>
                      <a class="dropdown-item menu navbar1" href="{{url('cortometrajedocumental')}}">Cortometraje Documental</a>
                      <a class="dropdown-item menu navbar1" href="{{url('cortometrajeanimado')}}">Cortometraje Animación</a>
                      <a class="dropdown-item menu navbar1" href="{{url('cortometrajeuniversitario')}}">Cortometraje Universitario</a>
                      <a class="dropdown-item menu navbar1" href="{{url('cortometrajeficcion')}}">Cortometraje Internacional</a>
                    
                    </div>
                </li>
                <li class="nav-item">
                <a class="nav-link menu navbar1" href="{{ url('/talleres') }}">Talleres</a>
                </li>
                <li class="nav-item">
                <a class="nav-link menu navbar1" href="{{ url('/programacion') }}">Programación</a>
                </li>
                <li class="nav-item">
                <a class="nav-link menu navbar1" href="{{ url('/noticias') }}">Noticias</a>
                </li>
                <li class="nav-item">
                <a class="nav-link menu navbar1" href="{{ url('/gallery') }}">Galeria</a>
                </li>
                <li class="nav-item dropdown" id='dmenu'  >
                    <a class="nav-link dropdown-toggle  menu navbar1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      El Festival
                    </a>
                    <div class="dropdown-menu navbar1" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item menu navbar1" href="{{ url('/bases') }}">Bases</a>
                      <a class="dropdown-item menu navbar1" href="{{ url('/equipo') }}">Equipo</a>
                      <a class="dropdown-item menu navbar1" href="{{ url('/jurado') }}">Jurado</a>
                    
                    </div>
                </li>

            </ul>

        </div>
        <div class="flex-center position-ref float-right ">
                @if (Route::has('login'))
                    <div class="right link buttonunion" style="padding: 0 0 px">
                        @auth
                            @if(Auth::user()->rol == 'admin')
                                   <a href="{{ url('/admin') }}">  PERFIL ADMIN</a>
                            @endif

                             @if(Auth::user()->rol == 'user')
                                <a href="{{ url('/home') }}" style="color: black">
                                    {{Auth::user()->name}}
                                    <img src="{{ asset('storage/app/public').'/'. Auth::user()->img }} "  class='imgPerfil'>

                                </a>

                            @endif


                        @else
                            <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-light"><i class="fas fa-users"></i> INGRESAR</button></a>

                            {{-- @if (Route::has('register'))

                                <a href="{{ route('register') }}"><button type="button" class="btn btn-warning">REGISTRATE</button></a>
                            @endif --}}
                        @endauth
                    </div>
                @endif

            </div>
    </div>
</nav>
</div>



{{-- <div>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top text-center" >
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" style="background-color: black" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">
            <!--<img src="../img/logos/icofestival.png" alt="" height="70%" width="60%">-->
        </a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav "><!--ml-auto-->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>-->
                <li class="nav-item">
                <a class="nav-link menu" href="{{ url('/') }}">INICIO</a>
                </li>
                <li class="nav-item">
                <a class="nav-link menu" href="{{ url('/peliculas') }}">PELÍCULAS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link menu" href="{{ url('/talleres') }}">TALLERES</a>
                </li>
                <li class="nav-item">
                <a class="nav-link menu" href="{{ url('/programacion') }}">PROGRAMACIÓN</a>
                </li>
                <li class="nav-item">
                <a class="nav-link menu" href="{{ url('/noticias') }}">NOTICIAS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link menu" href="{{ url('/gallery') }}">GALERIA</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      EL FESTIVAL
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item menu" href="{{ url('/bases') }}">BASES</a>
                      <a class="dropdown-item menu" href="{{ url('/equipo') }}">EQUIPO</a>
                      <a class="dropdown-item menu" href="{{ url('/jurado') }}">JURADO</a>
                    </div>
                </li>

            </ul>

        </div>
        <div class="flex-center position-ref float-right ">
                @if (Route::has('login'))
                    <div class="right link buttonunion" style="padding: 0 0 px">
                        @auth
                            @if(Auth::user()->rol == 'admin')
                                   <a href="{{ url('/admin') }}">  PERFIL ADMIN</a>
                            @endif

                             @if(Auth::user()->rol == 'user')
                             <a href="{{ url('/home') }}" style="color: black">
                                {{Auth::user()->name}}
                                <img src="{{ asset('storage/app/public').'/'. Auth::user()->img }} "  class='imgPerfil'>

                            </a>
                            @endif


                        @else
                            <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-dark">INGRESA</button></a>

                            @if (Route::has('register'))

                                <a href="{{ route('register') }}"><button type="button" class="btn btn-warning">REGISTRATE</button></a>
                            @endif
                        @endauth
                    </div>
                @endif

            </div>
    </div>
</nav>
</div> --}}
