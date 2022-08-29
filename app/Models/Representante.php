<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Representante
 *
 * @property $id
 * @property $type_dni
 * @property $cedula
 * @property $apellido
 * @property $nombre
 * @property $nacionalidad
 * @property $correo
 * @property $instruccion
 * @property $sexo
 * @property $ocupacion
 * @property $created_at
 * @property $updated_at
 *
 * @property DireccionesRepresentante[] $direccionesRepresentantes
 * @property Estudiante[] $estudiantes
 * @property TelefonosRepresentante[] $telefonosRepresentantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Representante extends Model
{
    
    static $rules = [
		'type_dni' => 'required',
		'cedula' => 'required',
		'apellido' => 'required',
		'nombre' => 'required',
		'nacionalidad' => 'required',
		'correo' => 'required',
		'instruccion' => 'required',
		'sexo' => 'required',
		'ocupacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type_dni','cedula','apellido','nombre','nacionalidad','correo','instruccion','sexo','ocupacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function direccionesRepresentantes()
    {
        return $this->hasMany('App\Models\DireccionesRepresentante', 'id_representantes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudiantes()
    {
        return $this->hasMany('App\Models\Estudiante', 'id_representantes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function telefonosRepresentantes()
    {
        return $this->hasMany('App\Models\TelefonosRepresentante', 'id_representantes', 'id');
    }
    

}
