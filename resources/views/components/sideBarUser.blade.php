

  <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
    <div class="list-group">
        <a href="{{ url('/home') }}" class="list-group-item list-group-item-action active" style="background-color: #f8b21e; border-color:#f8b21e">
            <i class="fas fa-home"></i>
            <spam ><b>Home</b><spam>
        </a>
        <a href="{{ url('/lista') }}" class="list-group-item list-group-item-action"><i class="fa fa-check-circle" aria-hidden="true"></i>
            Ver mis Votos
        </a>
        <a href="{{ url('/listcomen') }}" class="list-group-item list-group-item-action"><i class="fa fa-comments" aria-hidden="true"></i>
            Mis Comentarios</a>

        <a href="{{ url('/editperfil') }}" class="list-group-item list-group-item-action"><i class="fas fa-user-edit"></i>

            Editar Información
        </a>
        <a href="{{ url('/') }}"  class="list-group-item list-group-item-action" style="text-align: center">
                    <button type="button" class="btn btn-primary">
                        {{ __('REGRESAR A INICIO') }}
                    </button>
                </a>

    </div>
  </div>
