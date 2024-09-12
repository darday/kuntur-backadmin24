@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Listado de Comentarios</h1>
                <hr>
                <div class="alert alert-success" role="alert">
                    <h1>Cometarios Totales: {{$cont}} </h1>
                </div>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>








                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>


                            <th>Usuario</th>
                            <th>Comentario</th>
                            <th style="width: 90px">Titulo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usu as $notice)
                        <tr>

                            <td>{{$loop->iteration}}</td>


                            <td>{{$notice->name}}</td>
                            <td>{{$notice->com_Descripcion}}</td>
                            <td>{{$notice->film_Titulo}}</td>

                            <td>



                            <form method="post" action="{{url('/dcoment/'.$notice->id)}}">
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
            "info":"_TOTAL_ Usuarios",
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


