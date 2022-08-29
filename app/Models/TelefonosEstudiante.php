<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TelefonosEstudiante
 *
 * @property $id
 * @property $numero
 * @property $tipo
 * @property $id_estudiantes
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TelefonosEstudiante extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'tipo' => 'required',
		'id_estudiantes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','tipo','id_estudiantes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id', 'id_estudiantes');
    }
    

}
