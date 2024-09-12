@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBarUser')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1 class="titulo">Mis Comentarios</h1>
                <hr>


                    @if(Session::has('Mensaje'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('Mensaje')}}
                    </div>
                    @endif


                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Titulo</th>
                            <th>Comentario</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $votel)
                        <tr>

                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img src="{{ asset('storage/app/public').'/'. $votel->film_imagen}}" alt="foto" width="70px" height="110px">  <!--se debe agregar php artisan storage:link-->

                            </td>
                            <td>{{$votel->film_titulo}}</td>
                            <td>{{$votel->com_Descripcion}}</td>
                            <td>{{$votel->created_at}}</td>




                            <td>

                            <a href="{{url('/editcomen/'.$votel->id.'/edit')}}">
                                <button type="button" class="btn btn-warning"> Editar</button>
                            </a>

                            <form method="post" action="{{url('/deletecomen/'.$votel->id)}}">
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


