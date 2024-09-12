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
                    <form method="POST" action="{{url('/etaller/'.$taller->id)}}"   enctype="multipart/form-data">
                        {{csrf_field()}}<!--Seguridad-->
                        {{method_field('PATCH')}}

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Titulo: </label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="Tall_titulo" value="{{$taller->Tall_titulo}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Fecha: </label>

                            <div class="col-md-12">
                                <input id="name" type="date" class="form-control @error('name') is-invalid @enderror" name="Tall_fecha" value="{{$taller->Tall_fecha}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Hora: </label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="Tall_hora" value="{{$taller->Tall_hora}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Estado: </label>

                            <div class="col-md-12">
                                <select class="form-control" name="Tall_estado">
                                    <option selected value="{{$taller->Tall_estado}}">{{$taller->Tall_estado}}</option>
                                    <option value="Lleno">Lleno</option>
                                    <option value="Disponible">Disponible</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Descripcion: </label>

                            <div class="col-md-12">
                                <textarea  name="Tall_descripcion" id="textarea" rows="10" class="form-control">{{$taller->Tall_descripcion}}

                                </textarea>
                            </div>
                        </div>


                        <div class="custom-file">
                            <label for="exampleFormControlFile1">Imagen:</label><br>
                            <img src="{{ asset('storage/app/public').'/'. $taller->Tall_imagen}}" alt="foto" width="70px">

                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Tall_imagen">
                        </div>


                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">URL </label>

                            <div class="col-md-12">
                                <textarea  name="Tall_url" id="textarea" rows="1" class="form-control">{{$taller->Tall_url}}

                                </textarea>
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


