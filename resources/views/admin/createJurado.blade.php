@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >

        @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Agregar Jurado</h1>
                <hr>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>
                 <div class="card-body">
                    <form method="POST" action="{{ route('create_not') }}"   enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Titulo: </label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="Not_Titulo" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Fecha: </label>

                            <div class="col-md-12">
                                <input id="name" type="date" class="form-control @error('name') is-invalid @enderror" name="Not_Fecha" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Estado: </label>

                            <div class="col-md-12">
                                <select class="form-control" name="Not_Estado">
                                    <option selected value="Deshabilitado">Deshabilitado</option>
                                    <option value="Habilitado">Habilitado</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Descripcion: </label>

                            <div class="col-md-12">
                                <textarea  name="Not_Descripcion" id="textarea" rows="10" class="form-control">

                                </textarea>
                            </div>
                        </div>



                        <div class="custom-file">
                            <label for="exampleFormControlFile1">Imagen:</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Not_imagen">
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Descripcion de Imagen: </label>

                            <div class="col-md-12">
                                <textarea  name="Not_ImgDesc" id="textarea" rows="1" class="form-control">

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


