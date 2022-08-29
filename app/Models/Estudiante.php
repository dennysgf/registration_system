<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $type_dni
 * @property $cedula
 * @property $apellido
 * @property $nombre
 * @property $fecha_nacimiento
 * @property $edad
 * @property $lugar_nacimiento
 * @property $nacionalidad
 * @property $discapacidad
 * @property $n_carnet
 * @property $tipo_discapacidad
 * @property $porcentaje
 * @property $correo
 * @property $definicion_etnica
 * @property $tipo_sangre
 * @property $sexo
 * @property $id_representantes
 * @property $created_at
 * @property $updated_at
 *
 * @property DireccionesEstudiante[] $direccionesEstudiantes
 * @property Matricula[] $matriculas
 * @property ParientesEstudiante[] $parientesEstudiantes
 * @property Representante $representante
 * @property TelefonosEstudiante[] $telefonosEstudiantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'type_dni' => 'required',
		'cedula' => 'required',
		'apellido' => 'required',
		'nombre' => 'required',
		'fecha_nacimiento' => 'required',
		'edad' => 'required',
		'lugar_nacimiento' => 'required',
		'nacionalidad' => 'required',
		'discapacidad' => 'required',
		'n_carnet' => 'required',
		'tipo_discapacidad' => 'required',
		'porcentaje' => 'required',
		'correo' => 'required',
		'definicion_etnica' => 'required',
		'tipo_sangre' => 'required',
		'sexo' => 'required',
		'id_representantes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type_dni','cedula','apellido','nombre','fecha_nacimiento','edad','lugar_nacimiento','nacionalidad','discapacidad','n_carnet','tipo_discapacidad','porcentaje','correo','definicion_etnica','tipo_sangre','sexo','id_representantes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function direccionesEstudiantes()
    {
        return $this->hasMany('App\Models\DireccionesEstudiante', 'id_estudiantes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function matriculas()
    {
        return $this->hasMany('App\Models\Matricula', 'id_estudiantes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parientesEstudiantes()
    {
        return $this->hasMany('App\Models\ParientesEstudiante', 'id_estudiantes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function representante()
    {
        return $this->hasOne('App\Models\Representante', 'id', 'id_representantes');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function telefonosEstudiantes()
    {
        return $this->hasMany('App\Models\TelefonosEstudiante', 'id_estudiantes', 'id');
    }
    

}
