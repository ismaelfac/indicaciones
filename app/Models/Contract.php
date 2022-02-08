<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contract
 *
 * @property $id
 * @property $asegurable
 * @property $domus
 * @property $cannonLease
 * @property $adminValue
 * @property $increment
 * @property $contractRights
 * @property $deliveryDate
 * @property $gracePeriod
 * @property $clause
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property ContractPerson[] $contractPeoples
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contract extends Model
{
    
    static $rules = [
		'cannonLease' => 'required',
		'isActive' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['asegurable','domus','cannonLease','adminValue','increment','contractRights','deliveryDate','gracePeriod','clause','isActive'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contractPeoples()
    {
        return $this->hasMany('App\Models\ContractPerson', 'contract_id', 'id');
    }
    

}
