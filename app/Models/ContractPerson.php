<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractPerson
 *
 * @property $id
 * @property $contract_id
 * @property $person_id
 * @property $typePerson
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property Contract $contract
 * @property Person $person
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ContractPerson extends Model
{
    
    static $rules = [
		'contract_id' => 'required',
		'person_id' => 'required',
		'typePerson' => 'required',
		'isActive' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['contract_id','person_id','typePerson','isActive'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contract()
    {
        return $this->hasOne('App\Models\Contract', 'id', 'contract_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        return $this->hasOne('App\Models\Person', 'id', 'person_id');
    }
    

}
