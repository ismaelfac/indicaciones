<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractDocument
 *
 * @property $id
 * @property $contract_id
 * @property $fileName
 * @property $route
 * @property $user_id
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property Contract $contract
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ContractDocument extends Model
{
    
    static $rules = [
		'contract_id' => 'required',
        'document_id' => 'required',
		'fileName' => 'required',
		'route' => 'required',
		'user_id' => 'required',
		'isActive' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['contract_id', 'document_id', 'fileName','route','user_id','isActive'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contract()
    {
        return $this->hasOne('App\Models\Contract', 'id', 'contract_id');
    }

    public function document()
    {
        return $this->hasOne('App\Models\Document', 'id', 'document_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
