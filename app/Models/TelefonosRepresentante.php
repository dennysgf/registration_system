<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TelefonosRepresentante
 *
 * @property $id
 * @property $numero
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 * @property $id_representantes
 *
 * @property Representante $representante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TelefonosRepresentante extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'tipo' => 'required',
		'id_representantes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','tipo','id_representantes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function representante()
    {
        return $this->hasOne('App\Models\Representante', 'id', 'id_representantes');
    }
    

}
