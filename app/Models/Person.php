<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contract;

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
 * @property $created_at
 * @property $updated_at
 *
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
		'email' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['names','slug','address','dni','typeDni','phone','email','isActive'];

    public function contracts()
    {
      return $this->belongsToMany(Contract::class);
    }


}
