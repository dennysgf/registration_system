<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DireccionesEstudiante
 *
 * @property $id
 * @property $calle_primaria
 * @property $calle_secundaria
 * @property $numero_casa
 * @property $provincia
 * @property $canton
 * @property $parroquia
 * @property $referencia
 * @property $id_estudiantes
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DireccionesEstudiante extends Model
{
    
    static $rules = [
		'calle_primaria' => 'required',
		'calle_secundaria' => 'required',
		'numero_casa' => 'required',
		'provincia' => 'required',
		'canton' => 'required',
		'parroquia' => 'required',
		'referencia' => 'required',
		'id_estudiantes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['calle_primaria','calle_secundaria','numero_casa','provincia','canton','parroquia','referencia','id_estudiantes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id', 'id_estudiantes');
    }
    

}
