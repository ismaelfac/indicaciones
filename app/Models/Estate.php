<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estate
 *
 * @property $id
 * @property $address
 * @property $realEstateRegistration
 * @property $typeEstate
 * @property $isSharedElectricityMeter
 * @property $isSharedWaterMeter
 * @property $isSharedGasMeter
 * @property $isGarage
 * @property $isUseFulRoom
 * @property $hasAdministration
 * @property $paymentInFavorOf
 * @property $typeDni
 * @property $dni
 * @property $email
 * @property $phone
 * @property $bankingEntity
 * @property $accountType
 * @property $accountNumber
 * @property $paymentDate
 * @property $namesAdministrator
 * @property $annotations
 * @property $user_id
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property ContractEstate[] $contractEstates
 * @property Garage[] $garages
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estate extends Model
{
    
    static $rules = [
		'address' => 'required',
		'realEstateRegistration' => 'required',
		'typeEstate' => 'required',
		'isSharedElectricityMeter' => 'required',
		'isSharedWaterMeter' => 'required',
		'isSharedGasMeter' => 'required',
		'isGarage' => 'required',
		'isUseFulRoom' => 'required',
		'hasAdministration' => 'required',
		'paymentInFavorOf' => 'required',
		'typeDni' => 'required',
		'bankingEntity' => 'required',
		'accountType' => 'required',
		'user_id' => 'required',
		'isActive' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['address','realEstateRegistration','typeEstate','isSharedElectricityMeter','isSharedWaterMeter','isSharedGasMeter','isGarage','isUseFulRoom','hasAdministration','paymentInFavorOf','typeDni','dni','email','phone','bankingEntity','accountType','accountNumber','paymentDate','namesAdministrator','annotations','user_id','isActive'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contractEstates()
    {
        return $this->hasMany('App\Models\ContractEstate', 'estate_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function garages()
    {
        return $this->hasMany('App\Models\Garage', 'estate_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
