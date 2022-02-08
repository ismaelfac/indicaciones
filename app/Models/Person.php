<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    public function contractPeoples()
    {
        return $this->hasMany('App\Models\ContractPerson', 'person_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
