<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Especialidade
 *
 * @property $id
 * @property $specialidad
 * @property $created_at
 * @property $updated_at
 *
 * @property EspecialidadesCurso[] $especialidadesCursos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Especialidade extends Model
{
    
    static $rules = [
		'specialidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['specialidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function especialidadesCursos()
    {
        return $this->hasMany('App\Models\EspecialidadesCurso', 'id_especialidades', 'id');
    }
    

}
