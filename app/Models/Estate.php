<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estate
 *
 * @property $id
 * @property $address
 * @property $garajes
 * @property $usefulRoom
 * @property $typeEstate
 * @property $user_id
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property ContractEstate[] $contractEstates
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estate extends Model
{
    
    static $rules = [
		'address' => 'required',
		'typeEstate' => 'required',
		'isActive' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['address','garajes','usefulRoom','typeEstate','user_id','isActive'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contractEstates()
    {
        return $this->hasMany('App\Models\ContractEstate', 'estate_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
