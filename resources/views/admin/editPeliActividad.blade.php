@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @include('components/sideBar')
        <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
            <h1>Ingresar Película a Actividad</h1>
            <hr>

            <div class="alert alert-success" role="alert">
                @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
            </div>
            <div class="card-body">
                <form method="POST" action="{{url('/upeli_activity/'.$activity->id_activity_fims)}}" enctype="multipart/form-data">
                    {{csrf_field()}}<!--Seguridad-->
                    {{method_field('PATCH')}}


                    <div class="form-group row">
                        <label for="titulo" class="col-md-12 col-form-label ">Fecha: </label>

                        <div class="col-md-12">
                            <select class="form-control" name="id_activity" id="film" autofocus><!--id="exampleFormControlSelect1"-->
                                <option value="{{$activity->id_activity}}" selected>{{$activity->fecha}} - {{$activity->hora}} - {{$activity->descripcion}} - {{$activity->provincia}} - {{$activity->lugar}}</option>

                                @foreach($dato2['fecha'] as $fecha)
                                <option value="{{$fecha->id_activities}}">{{$fecha->fecha}} - {{$fecha->hora}} - {{$fecha->descripcion}} - {{$fecha->provincia}} - {{$fecha->lugar}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="titulo" class="col-md-12 col-form-label ">Film: </label>

                        <div class="col-md-12">
                            <select class="form-control" name="id_film" id="film" autofocus><!--id="exampleFormControlSelect1"-->
                                <option value="{{$activity->id_film}}" selected>{{$activity->film_Titulo}} </option>


                                @foreach($dato['film'] as $film)
                                <option value="{{$film["id"]}}">{{$film["film_Titulo"]}}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 "> <br>

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