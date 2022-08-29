<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profesore
 *
 * @property $id
 * @property $cedula
 * @property $apellido
 * @property $nombre
 * @property $fecha_nacimiento
 * @property $correo
 * @property $numero_telefono
 * @property $sex
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso[] $cursos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profesore extends Model
{
    
    static $rules = [
		'cedula' => 'required',
		'apellido' => 'required',
		'nombre' => 'required',
		'fecha_nacimiento' => 'required',
		'correo' => 'required',
		'numero_telefono' => 'required',
		'sex' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','apellido','nombre','fecha_nacimiento','correo','numero_telefono','sex'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany('App\Models\Curso', 'id_profesores', 'id');
    }
    

}
