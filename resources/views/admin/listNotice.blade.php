@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Listado de Noticias</h1>
                <hr>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Titulo</th>

                            <th>Fecha de Publicación</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notice as $notice)
                        <tr>

                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img src="{{ asset('storage/app/public').'/'. $notice->Not_imagen}}" alt="foto" width="90px" height="70px">  <!--se debe agregar php artisan storage:link-->
                            </td>
                            <td>{{$notice->Not_Titulo}}</td>

                            <td>{{$notice->Not_Fecha}}</td>
                            <td>{{$notice->Not_Estado}}</td>


                            <td>

                            <a href="{{url('/editnotice/'.$notice->id.'/edit')}}">
                                <button type="button" class="btn btn-warning"> Editar</button>
                            </a>

                            <form method="post" action="{{url('/deletenotice/'.$notice->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="Submit" class="btn btn-danger" onclick="return confirm('¿Desea Borrar?');  " > Borrar</button>
                            </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

    </div>
</div>





@endsection


