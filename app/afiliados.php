<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class afiliados extends Model
{
    protected $table = 'afiliados';

    protected $fillable = [
                            'name', 'apellido', 'telefono', 'sexo', 'image_ine',
                            'estado_civil', 'fecha_nacimiento', 'lugar_nacimiento',
                            'estado_vivienda', 'tiempo_viviendo', 'calle', 'colonia',
                            'dep_menores', 'dep_tercera_edad', 'vivienda_compartida'
                          ];
}
