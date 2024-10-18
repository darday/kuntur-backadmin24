@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Listado de Fotos</h1>
                <hr>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>

                <div class="container animated fadeInUp">
                    <div class="row ">

                    @foreach($film as $film)
                    <div class="col-12 col-sm-12 col-md-10 col-lg-3 col-xl-3">
                            <img src="{{asset('storage').'/'. $film->Foto}}" alt="" width="200px" height="150px" class="responsive ">
                            <!-- <img src="{{url($film->Foto)}}" alt="" width="200px" height="150px" class="responsive "> -->
                            <form method="post" action="{{url('/gdelete/'.$film->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="Submit" class="btn btn-danger" onclick="return confirm('¿Desea Borrar?');  " > Borrar</button>
                            </form>
                        <br>
                        <br>
                    </div>
                    @endforeach
                        <!--------------------------------------------------------->
                    </div>
                </div>

            </div>

    </div>
</div>





@endsection


