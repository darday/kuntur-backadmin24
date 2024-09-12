@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >

        @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Ingresar Película a Programación</h1>
                <hr>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>
                 <div class="card-body">
                    <form method="POST" action="{{ route('create_programacion') }}"   enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Film: </label>

                            <div class="col-md-12" >
                                <select class="form-control" name="pro_Film"  id="film" autofocus><!--id="exampleFormControlSelect1"-->
                                    <option value="Seleccione" selected>Seleccione</option>
                                    @foreach($film as $film)
                                        <option value="{{$film["id"]}}">{{$film["film_Titulo"]}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Fecha: </label>

                            <div class="col-md-12" >
                                <select class="form-control" name="pro_Fecha"  id="film" autofocus><!--id="exampleFormControlSelect1"-->
                                    <option value="Seleccione" selected>Seleccione</option>
                                    @foreach($fecha as $film)
                                        <option value="{{$film["id"]}}">{{$film["fecha"]}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Hora Inicio: </label>

                            <div class="col-md-12">
                                <input id="name" type="time" class="form-control @error('name') is-invalid @enderror" name="pro_Hini" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Hora Fin: </label>

                            <div class="col-md-12">
                                <input id="name" type="time" class="form-control @error('name') is-invalid @enderror" name="pro_Hfin" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Director: </label>

                            <div class="col-md-12">
                                <Label id="dir" ></Label>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Disponible en: </label>

                            <div class="col-md-12">
                                <textarea  name="pro_ver" id="textarea" rows="10" class="form-control">

                                </textarea>
                            </div>
                        </div>



                        <div class="custom-file">
                            <label for="exampleFormControlFile1">Imagen:</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="pro_imgDia">
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">                            <br >

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

<script src="{{ asset('/public/js/programacion.js') }}">


</script>
<script src="{{ asset('/js/programacion.js') }}">


</script>

@endsection



