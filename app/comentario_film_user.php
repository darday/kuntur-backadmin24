<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentario_film_user extends Model
{
    protected $fillable=["comentario_id","film_id","user_id"];
}
