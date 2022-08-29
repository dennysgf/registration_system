<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PeriodosAcademico
 *
 * @property $id
 * @property $año
 * @property $periodo
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso[] $cursos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PeriodosAcademico extends Model
{
    
    static $rules = [
		'año' => 'required',
		'periodo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['año','periodo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany('App\Models\Curso', 'id_periodos_academicos', 'id');
    }
    

}
