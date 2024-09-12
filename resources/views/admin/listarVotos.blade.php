@extends('layouts.app')
@inject('provider', 'App\Http\Controllers\CalificacionFilmUserController')


@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Listar Votos</h1>
                <hr>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Titulo</th>

                            <th>Sobresalientes</th>
                            <th>Muy Buenos</th>
                            <th>Buenos</th>
                            <th>Categoría</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peli as $tall)
                        <tr>

                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img src="{{ asset('storage/app/public').'/'. $tall->film_imagen}}" alt="foto" width="90px" height="70px">  <!--se debe agregar php artisan storage:link-->
                            </td>
                            <td>{{$tall->film_Titulo}}</td>
                            <td>
                                <span class="text-bold">
                                    {{ $provider::votosobre($tall->id) }}
                                </span>

                            </td>
                            <td>
                                <span class="text-bold">
                                    {{ $provider::votomuyb($tall->id) }}
                                </span>

                            </td>
                            <td>
                                <span class="text-bold">
                                    {{ $provider::votobueno($tall->id) }}
                                </span>

                            </td>

                            <td>{{$tall->film_Categoria}}</td>

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
            "info":"_TOTAL_ Votos",
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


