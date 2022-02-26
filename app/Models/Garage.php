<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Garage
 *
 * @property $id
 * @property $estate_id
 * @property $realEstateLicensePlate
 * @property $typeGaraje
 * @property $observations
 * @property $user_id
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property Estate $estate
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Garage extends Model
{
    
    static $rules = [
		'estate_id' => 'required',
		'realEstateLicensePlate' => 'required',
		'typeGaraje' => 'required',
		'user_id' => 'required',
		'isActive' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estate_id','realEstateLicensePlate','typeGaraje','observations','user_id','isActive'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estate()
    {
        return $this->hasOne('App\Models\Estate', 'id', 'estate_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
