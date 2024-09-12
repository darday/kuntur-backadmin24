<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable=["Not_Titulo","Not_Fecha","Not_Descripcion","Not_imagen","Not_Estado","Created_at","Updated_at","Not_ImgDesc"];
}
