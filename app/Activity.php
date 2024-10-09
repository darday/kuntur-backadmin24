<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $primaryKey = 'id_activities';

    protected $fillable = [
        'descripcion',
        'id_fechaprogramacions', // Agrega este campo aquí
        'hora',
        'provincia',
        'lugar'
        // Otros campos que puedas tener
    ];

    public function films()
    {
        return $this->belongsToMany(Film::class, 'activity_fims', 'id_activity', 'id_film');
    }
}
