@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >

        @include('components/sideBar')
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <h1>Agregar Fotos</h1>
                <hr>

                <div class="alert alert-success" role="alert">
                    @if(Session::has('Mensaje')){{
                        Session::get('Mensaje')
                    }}@endif
                </div>
                 <div class="card-body">
                    <form method="POST" action="{{ route('cgallery') }}"   enctype="multipart/form-data">
                        @csrf


                        <div class="custom-file">
                            <label for="exampleFormControlFile1">Imagen:</label>
                            <div class="col-sm-4 col-xs-8">
                                <input type="file" name="Foto[]" required multiple>
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


