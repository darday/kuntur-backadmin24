
@foreach($user as $comentario)
<div class="article col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12 ">
    <div class="card">
        <div class="card-header" style="background-color: #f8b21e; ">
            <img src="{{ asset('storage').'/'. $comentario->img }} "  class='imgPerfil'>
            <span style="color: black"><b>{{$comentario->name}}</b></span>
        </div>
        <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>{{$comentario->com_Descripcion}}</p>
        </blockquote>
        </div>
    </div>
</div>
<br>
@endforeach




