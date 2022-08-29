<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $seccion
 * @property $id_periodos_academicos
 * @property $id_paralelos
 * @property $id_profesores
 * @property $id_niveles
 * @property $created_at
 * @property $updated_at
 *
 * @property EspecialidadesCurso[] $especialidadesCursos
 * @property Matricula[] $matriculas
 * @property Nivele $nivele
 * @property Paralelo $paralelo
 * @property PeriodosAcademico $periodosAcademico
 * @property Profesore $profesore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{
    
    static $rules = [
		'seccion' => 'required',
		'id_periodos_academicos' => 'required',
		'id_paralelos' => 'required',
		'id_profesores' => 'required',
		'id_niveles' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['seccion','id_periodos_academicos','id_paralelos','id_profesores','id_niveles'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function especialidadesCursos()
    {
        return $this->hasMany('App\Models\EspecialidadesCurso', 'id_cursos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function matriculas()
    {
        return $this->hasMany('App\Models\Matricula', 'id_cursos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nivele()
    {
        return $this->hasOne('App\Models\Nivele', 'id', 'id_niveles');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paralelo()
    {
        return $this->hasOne('App\Models\Paralelo', 'id', 'id_paralelos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periodosAcademico()
    {
        return $this->hasOne('App\Models\PeriodosAcademico', 'id', 'id_periodos_academicos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profesore()
    {
        return $this->hasOne('App\Models\Profesore', 'id', 'id_profesores');
    }
    

}
