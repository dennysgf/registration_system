<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paralelo
 *
 * @property $id
 * @property $paralelo
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso[] $cursos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paralelo extends Model
{
    
    static $rules = [
		'paralelo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['paralelo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany('App\Models\Curso', 'id_paralelos', 'id');
    }
    

}
