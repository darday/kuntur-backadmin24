@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @include('components/sideBar')
        <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
            <h1>Crear Actividad</h1>
            <hr>

            <div class="alert alert-success" role="alert">
                @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('/uactivity/' . $activity->id_activities) }}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PATCH')}}


                    <div class="form-group row">

                        <div class="col-md-6">
                            <label for="titulo" class="col-md-12 col-form-label ">Fecha: </label>
                            <select class="form-control" name="id_fechaprogramacions" id="film" autofocus><!--id="exampleFormControlSelect1"-->
                                <option value="{{$activity->id_fechaprogramacions}}" selected>{{$activity->fecha}}</option>
                                @foreach($fecha as $film)
                                <option value="{{$film["id"]}}">{{$film["fecha"]}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="titulo" class="col-md-12 col-form-label ">Hora Inicio: </label>

                            <div class="col-md-12">
                                <input id="name" type="time" class="form-control @error('name') is-invalid @enderror" name="hora" value="{{$activity->hora}}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="titulo" class="col-md-12 col-form-label ">Descripcion de actividad: </label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="descripcion" value="{{$activity->actividad_desc}}" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="titulo" class="col-md-12 col-form-label ">Provincia: </label>
                            <select class="form-control" name="provincia" required>
                                <option selected value="{{$activity->provincia}}">{{$activity->provincia}}</option>
                                <option selected value="Chimborazo">Chimborazo</option>
                                <option value="Bolivar">Bolivar</option>
                                <option value="Pichincha">Pichincha</option>
                                <option value="Cotopaxi">Cotopaxi</option>
                                <option value="Tungurahua">Tungurahua</option>
                                <option value="Pastaza">Pastaza</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">

                    </div>

                    <div class="form-group row">
                        <label for="titulo" class="col-md-12 col-form-label ">Lugar: </label>
                        <div class="col-md-12">
                            <textarea name="lugar" id="textarea" rows="2" class="form-control" required>{{$activity->lugar}}</textarea>
                        </div>
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