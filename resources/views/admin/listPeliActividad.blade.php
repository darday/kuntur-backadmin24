@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Listado Programación</h1>
                <hr>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>

                <table id="example" class="table table-striped table-bordered" style="width:100%; background-color:white">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha de Publicación</th>
                            <th>Hora de Inicio</th>
                            <th>Actividad</th>
                            <th>Provincia</th>
                            <th>Película</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $notice)
                        <tr>

                            <td>{{$loop->iteration}}</td>
                            
                            <td>{{$notice->fecha}}</td>
                            <td>{{$notice->hora}}</td>

                            <td>{{$notice->actividad}}</td>
                            <td>{{$notice->provincia}}</td>
                            <td>{{$notice->film_Titulo}}</td>


                            <td>

                            <a href="{{url('/epeli_activity/'.$notice->id_activity_fims.'/edit')}}">
                                <button type="button" class="btn btn-warning"> Editar</button>
                            </a>

                            <form method="post" action="{{url('/dpeli_activity/'.$notice->id_activity_fims)}}">
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



<script>
    $(document).ready( function () {
    $('#example').DataTable({
        "language":{
            "info":"_TOTAL_ Comentarios",
            "search":"Buscar",
            "paginate":{
                "next":"Siguiente",
                "previous":"Anterior",
            },
            "lengthMenu":'Mostrar<select>'+
                            '<option value="10">10</option>'+
                            '<option value="25">25</option>'+
                            '<option value="50">50</option>'+
                            '<option value="-1">Todo</option>'+
                            '</select> Registros',
            "loadingRecords": "Cargando Datos...",
            "processing":     "Procesando...",
            "emptyTable":     "No existen Datos",
            "zeroRecords":    "No se encontraron Coincidencias",
            "infoEmpty":      "",
            "infoFiltered":   "",






        }
    });
} );

</script>



@endsection


