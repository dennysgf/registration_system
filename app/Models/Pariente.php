<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pariente
 *
 * @property $id
 * @property $type_dni
 * @property $cedula
 * @property $apellido
 * @property $nombre
 * @property $nacionalidad
 * @property $correo
 * @property $instruccion
 * @property $ocupacion
 * @property $created_at
 * @property $updated_at
 *
 * @property DireccionesPariente[] $direccionesParientes
 * @property ParientesEstudiante[] $parientesEstudiantes
 * @property TelefonosPariente[] $telefonosParientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pariente extends Model
{
    
    static $rules = [
		'type_dni' => 'required',
		'cedula' => 'required',
		'apellido' => 'required',
		'nombre' => 'required',
		'nacionalidad' => 'required',
		'correo' => 'required',
		'instruccion' => 'required',
		'ocupacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type_dni','cedula','apellido','nombre','nacionalidad','correo','instruccion','ocupacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function direccionesParientes()
    {
        return $this->hasMany('App\Models\DireccionesPariente', 'id_parientes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parientesEstudiantes()
    {
        return $this->hasMany('App\Models\ParientesEstudiante', 'id_parientes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function telefonosParientes()
    {
        return $this->hasMany('App\Models\TelefonosPariente', 'id_parientes', 'id');
    }
    

}
