@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >

        @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Editar Programación</h1>
                <hr>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>
                 <div class="card-body">
                    <form method="POST" action="{{url('/uactivity/'.$prog->id)}}"   enctype="multipart/form-data">
                        {{csrf_field()}}<!--Seguridad-->
                        {{method_field('PATCH')}}



                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Film: </label>
                            <label for="titulo" class="col-md-12 col-form-label ">{{$prog["pro_Film"]}} </label>
                            <input type="text" name ="pro_Film" value="{{$prog["pro_Film"]}}">

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
                                <input id="name" type="time" class="form-control @error('name') is-invalid @enderror" name="pro_Hini" value="{{$prog->pro_Hini}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Hora Fin: </label>

                            <div class="col-md-12">
                                <input id="name" type="time" class="form-control @error('name') is-invalid @enderror" name="pro_Hfin" value="{{$prog->pro_Hfin}}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Director: </label>

                            <div class="col-md-12">
                                <Label id="dir" >{{$prog["pro_Director"]}}</Label>
                                <input type="hidden" name="pro_Director" value="{{$prog["pro_Director"]}}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="titulo" class="col-md-12 col-form-label ">Disponible en: </label>

                            <div class="col-md-12">
                                <textarea  name="pro_ver" id="textarea" rows="10" class="form-control" >{{$prog->pro_ver}}</textarea>
                            </div>
                        </div>



                        <div class="custom-file">
                            <label for="exampleFormControlFile1">Imagen:</label>
                            <img src="{{ asset('storage').'/'. $prog->pro_imgDia}}" alt="foto" width="70px">

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




<script src="{{ asset('js/programacion.js') }}">


</script>

@endsection


