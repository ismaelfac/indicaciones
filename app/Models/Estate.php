<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Contract;

/**
 * Class Estate
 *
 * @property $id
 * @property $address
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
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['address'];

    public function contracts()
    {
      return $this->belongsToMany(Contract::class);
    }



}
