@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @include('components/sideBar')
        <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
            <h1>Ingresar Película</h1>
            <hr>

            <div class="alert alert-success" role="alert">
                @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
            </div>
            <div class="card-body" style="background-color: whitesmoke;">
                <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="titulo" class="col-md-12 col-form-label ">Titulo: </label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Titulo" value="" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="titulo" class="col-md-12 col-form-label ">Director/es: </label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Director" value="" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-md-6">
                            <label for="titulo" class="col-md-12 col-form-label ">Año: </label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Anio" value="" required autocomplete="name" autofocus>
                        </div>


                        <div class="col-md-6">
                            <label for="titulo" class="col-md-12 col-form-label ">Duración: </label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Duracion" value="" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">

                    </div>

                    <div class="form-group row">

                        <div class="col-md-6">
                            <label for="titulo" class="col-md-12 col-form-label ">Ciudad: </label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Ciudad" value="" required autocomplete="name" autofocus>
                        </div>


                        <div class="col-md-6">
                            <label for="titulo" class="col-md-12 col-form-label ">Categoría: </label>
                            <select class="form-control" name="film_Categoria">
                                <option selected value="Largometraje Ficción">Largometraje Ficción</option>
                                <option value="Largometraje Documental">Largometraje Documental</option>
                                <option value="Cortometraje Ficción">Cortometraje Ficción</option>
                                <option value="Cortometraje Documental">Cortometraje Documental</option>
                                <option value="Cortometraje Universitario Ficción">Cortometraje Universitario Ficción</option>
                                <option value="Cortometraje Universitario Documental">Cortometraje Universitario Documental</option>
                                <option value="Cortometraje Internacional">Cortometraje Internacional</option>
                                <!-- <option value="Wawas al Cine">Wawas al Cine</option>
                                    <option value="Proyecto Canelos">Proyecto Canelos</option>
                                    <option value="Cortos">Cortos</option> -->

                            </select>
                        </div>
                    </div>


                    <div class="form-group row">

                    </div>

                    <div class="form-group row">
                        <label for="titulo" class="col-md-12 col-form-label ">Estado: </label>

                        <div class="col-md-12">
                            <select class="form-control" name="film_Estado">
                                <option selected value="0">Deshabilitado</option>
                                <option value="1">Habilitado</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="titulo" class="col-md-12 col-form-label ">Descripcion: </label>

                        <div class="col-md-12">
                            <textarea name="film_Descripcion" id="textarea" rows="10" class="form-control">

                                </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="titulo" class="col-md-12 col-form-label ">Url Vimeo: </label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="film_Url" value="" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="custom-file">
                        <label for="exampleFormControlFile1">Imagen:</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="film_imagen">
                    </div>














                    <div class="form-group row mb-0">
                        <div class="col-md-12 ">
                            <br>

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