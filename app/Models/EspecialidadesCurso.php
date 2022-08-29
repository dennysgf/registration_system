<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EspecialidadesCurso
 *
 * @property $id
 * @property $categoria
 * @property $id_cursos
 * @property $id_especialidades
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @property Especialidade $especialidade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EspecialidadesCurso extends Model
{
    
    static $rules = [
		'categoria' => 'required',
		'id_cursos' => 'required',
		'id_especialidades' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria','id_cursos','id_especialidades'];


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
    public function especialidade()
    {
        return $this->hasOne('App\Models\Especialidade', 'id', 'id_especialidades');
    }
    

}
