@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBarUser')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <div class="titulo">

                    <h1 class="titulo">Mis Votos</h1>
                        <hr>
                </div>






                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen Película</th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Calificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $votel)
                        <tr>

                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img src="{{ asset('storage/app/public').'/'. $votel->film_imagen}}" alt="foto" width="70px" height="110px">  <!--se debe agregar php artisan storage:link-->

                            </td>
                            <td>{{$votel->film_Titulo}}</td>

                            <td>{{$votel->film_Categoria}}</td>
                            <td>{{$votel->calf_nombre}}</td>



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


