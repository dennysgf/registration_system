<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ParientesEstudiante
 *
 * @property $id
 * @property $parentezco
 * @property $id_estudiantes
 * @property $id_parientes
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @property Pariente $pariente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ParientesEstudiante extends Model
{
    
    static $rules = [
		'parentezco' => 'required',
		'id_estudiantes' => 'required',
		'id_parientes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['parentezco','id_estudiantes','id_parientes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id', 'id_estudiantes');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pariente()
    {
        return $this->hasOne('App\Models\Pariente', 'id', 'id_parientes');
    }
    

}
