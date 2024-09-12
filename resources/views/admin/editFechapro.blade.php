@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >

        @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Crear Noticia</h1>
                <hr>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>
                 <div class="card-body">
                    <form method="POST" action="{{url('/ufechapro/'.$fecha->id)}}"   enctype="multipart/form-data">
                        {{csrf_field()}}<!--Seguridad-->
                        {{method_field('PATCH')}}



                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Fecha: </label>

                            <div class="col-md-12">
                                <input id="name" type="date" class="form-control @error('name') is-invalid @enderror" name="fecha" value="{{$fecha->fecha}}" required autocomplete="name" autofocus>
                            </div>
                        </div>



                        <div class="custom-file">
                            <label for="exampleFormControlFile1">Imagen:</label><br>
                            <img src="{{ asset('storage/app/public').'/'. $fecha->imgfecha}}" alt="foto" width="90px" height="70px">  <!--se debe agregar php artisan storage:link-->

                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imgfecha">
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Descripcion de Imagen: </label>

                            <div class="col-md-12">
                                <textarea  name="descripcion" id="textarea" rows="1" class="form-control">{{$fecha->descripcion}}</textarea>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                            <br >

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

    </div>
</div>





@endsection


