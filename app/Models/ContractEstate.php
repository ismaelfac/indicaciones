<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractEstate
 *
 * @property $id
 * @property $contract_id
 * @property $estate_id
 * @property $user_id
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property Contract $contract
 * @property Estate $estate
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ContractEstate extends Model
{
    protected $table = 'contract_estates';
    static $rules = [
		'contract_id' => 'required',
		'estate_id' => 'required',
		'isActive' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['contract_id','estate_id','user_id','isActive'];


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
