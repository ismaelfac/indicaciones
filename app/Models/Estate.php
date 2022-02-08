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
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
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
    protected $fillable = ['address','garajes','usefulRoom','typeEstate','isActive'];



}
