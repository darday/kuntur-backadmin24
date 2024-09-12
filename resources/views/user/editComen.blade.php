@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBarUser')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Editar Comentario</h1>
                <hr>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>

                <form method="POST" action="{{url('/editcomen/'.$comen->id)}}"  >
                    {{csrf_field()}}<!--Seguridad-->
                    {{method_field('PATCH')}}

                    <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 text-center" >
                        <textarea  name="com_Descripcion" id="textarea" rows="2" class="form-control">{{$comen->com_Descripcion}}</textarea>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-left">

                        <button type="submit" class="btn btn-primary">Guardar Comentario</button>
                    </div>

                    <input type="hidden" name="film_id" value="{{$comen->film_id}}">
                    <input type="hidden" name="id_comen" value="{{$comen->id}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                </form>




            </div>

    </div>
</div>





@endsection


