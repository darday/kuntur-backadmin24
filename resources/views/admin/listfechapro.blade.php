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

                <table  id="example" class="table table-striped table-bordered" style="width:100%; background-color:whitesmoke">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Fecha</th>

                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fecha as $notice)
                        <tr>

                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img src="{{ asset('storage/app/public').'/'. $notice->imgfecha}}" alt="foto" width="90px" height="70px">  <!--se debe agregar php artisan storage:link-->
                            </td>
                            <td>{{$notice->fecha}}</td>
                            <td>{{$notice->descripcion}}</td>


                            <td>

                            <a href="{{url('/efechapro/'.$notice->id.'/edit')}}">
                                <button type="button" class="btn btn-warning"> Editar</button>
                            </a>

                            <form method="post" action="{{url('/dfechapro/'.$notice->id)}}">
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


