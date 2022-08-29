<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DireccionesRepresentante
 *
 * @property $id
 * @property $calle_primaria
 * @property $calle_secundaria
 * @property $numero_casa
 * @property $provincia
 * @property $canton
 * @property $parroquia
 * @property $referencia
 * @property $created_at
 * @property $updated_at
 * @property $id_representantes
 *
 * @property Representante $representante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DireccionesRepresentante extends Model
{
    
    static $rules = [
		'calle_primaria' => 'required',
		'calle_secundaria' => 'required',
		'numero_casa' => 'required',
		'provincia' => 'required',
		'canton' => 'required',
		'parroquia' => 'required',
		'referencia' => 'required',
		'id_representantes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['calle_primaria','calle_secundaria','numero_casa','provincia','canton','parroquia','referencia','id_representantes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function representante()
    {
        return $this->hasOne('App\Models\Representante', 'id', 'id_representantes');
    }
    

}
