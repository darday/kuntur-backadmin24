<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity_fim extends Model
{
    protected $primaryKey = 'id_activity_fims'; // Especifica el campo correcto

    protected $fillable = [
        'id_activity', 
        'id_film'
    ];
}
