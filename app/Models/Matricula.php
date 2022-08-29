<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Matricula
 *
 * @property $id
 * @property $type_assigment
 * @property $type_enrollment
 * @property $date_registration
 * @property $id_estudiantes
 * @property $id_cursos
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Matricula extends Model
{
    
    static $rules = [
		'type_assigment' => 'required',
		'type_enrollment' => 'required',
		'date_registration' => 'required',
		'id_estudiantes' => 'required',
		'id_cursos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type_assigment','type_enrollment','date_registration','id_estudiantes','id_cursos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'id_cursos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id', 'id_estudiantes');
    }
    

}
