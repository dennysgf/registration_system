<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TelefonosPariente
 *
 * @property $id
 * @property $numero
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 * @property $id_parientes
 *
 * @property Pariente $pariente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TelefonosPariente extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'tipo' => 'required',
		'id_parientes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','tipo','id_parientes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pariente()
    {
        return $this->hasOne('App\Models\Pariente', 'id', 'id_parientes');
    }
    

}
