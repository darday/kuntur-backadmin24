
@if(Auth::user()->rol == 'admin')
  <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" style="padding-top: 10%;">
    <div class="list-group">
        <a href="{{ url('/admin') }}" class="list-group-item list-group-item-action active">
            Home
        </a>
        <a href="{{ url('/create') }}" class="list-group-item list-group-item-action">Agregar Pelicula</a>
        <a href="{{ url('/listar') }}" class="list-group-item list-group-item-action">Listar Pelicula</a>
        <a href="{{ url('/cnoticia') }}" class="list-group-item list-group-item-action">Agregar Noticias</a>
        <a href="{{ url('/listnotice') }}" class="list-group-item list-group-item-action">Listar Noticias</a>
        <a href="{{ url('/cgallery') }}" class="list-group-item list-group-item-action">Agregar Fotos</a>
        <a href="{{ url('/lgallery') }}" class="list-group-item list-group-item-action">Listar Fotos</a>
        <a href="{{ url('/ctaller') }}" class="list-group-item list-group-item-action">Agregar Talleres</a>
        <a href="{{ url('/ltaller') }}" class="list-group-item list-group-item-action">Listar Talleres</a>
        <a href="{{ url('/cfechapro') }}" class="list-group-item list-group-item-action">Agregar Fecha de Programación</a>
        <a href="{{ url('/lfechapro') }}" class="list-group-item list-group-item-action">Listar Fechas de Programación</a>
        <a href="{{ url('/cprogramacion') }}" class="list-group-item list-group-item-action">Agregar Film a Programación</a>
        <a href="{{ url('/lprogramacion') }}" class="list-group-item list-group-item-action">Listar Programación</a>
        <!--<a href="{{ url('/cjurado') }}" class="list-group-item list-group-item-action">Agregar Jurado</a>-->
        <!--<a href="{{ url('/ljurado') }}" class="list-group-item list-group-item-action">Listar Jurado</a>-->
        <a href="{{ url('/lvotos') }}" class="list-group-item list-group-item-action">Ver Votos</a>
        <a href="{{url('lusuarios')}}" class="list-group-item list-group-item-action">Listar Usuarios</a>
        <a href="{{url('lcomentarios')}}" class="list-group-item list-group-item-action">Comentarios</a>
    </div>
  </div>
@else
  <h1>Error</h1>
@endif
