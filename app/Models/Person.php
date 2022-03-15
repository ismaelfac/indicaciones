<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Contract};
/**
 * Class Person
 *
 * @property $id
 * @property $names
 * @property $slug
 * @property $address
 * @property $dni
 * @property $typeDni
 * @property $phone
 * @property $email
 * @property $isActive
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property ContractPerson[] $contractPeoples
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Person extends Model
{
    
    static $rules = [
		'names' => 'required',
		'dni' => 'required',
		'typeDni' => 'required',
		'phone' => 'required',
		'email' => 'required',
		'isActive' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['names','slug','address','dni','typeDni','phone','email','isActive','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personContract()
    {
        return $this->belongsToMany(Contract::class)->withPivot('typePerson','typeParticipant','legalPersonOf','legalPersonOf','rentSplitPercentage','isIVAResponsible','isIntegralProtection','itIsGuaranteed','bankingEntity','accountType','accountNumber','isConsignmentPayment','user_id','isActive')->wherePivot('isActive',1);;
    }

    // public function contractPerson()
    // {
    //     return $this->belongsToMany(Contract::class)->withPivot('typePerson','typeParticipant','legalPersonOf','legalPersonOf','rentSplitPercentage','isIVAResponsible','isIntegralProtection','itIsGuaranteed','bankingEntity','accountType','accountNumber','isConsignmentPayment','user_id','isActive')->wherePivot('isActive',1);
    // }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
