<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    protected $fillable=["Tall_titulo","Tall_fecha","Tall_hora","Tall_estado","Tall_descripcion","Tall_imagen","Tall_url"];

}
