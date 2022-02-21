<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{ContractEstate, ContractPerson, Person };
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
 * @property $user_id
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property ContractDocument[] $contractDocuments
 * @property ContractEstate[] $contractEstates
 * @property ContractPerson[] $contractPeoples
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contract extends Model
{
    static $rules = [
        'asegurable' => 'required',
		'cannonLease' => 'required',
		'isActive' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['asegurable','domus','cannonLease','adminValue','increment','contractRights','deliveryDate','gracePeriod','clause','user_id','isActive'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function contractDocuments()
    {
        return $this->hasMany('App\Models\ContractDocument', 'contract_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function estates()
    {
        return $this->belongsToMany(Estate::class)->wherePivot('isActive',1);
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function contractPerson()
    {
        return $this->belongsToMany(Person::class)->withPivot('typePerson','type_participant')->wherePivot('isActive',1);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function contractEstate()
    {
        return $this->hasMany('App\Models\ContractEstate', 'contract_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
