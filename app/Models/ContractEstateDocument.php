<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractEstateDocument
 *
 * @property $id
 * @property $document_id
 * @property $contract_estate_id
 * @property $fileName
 * @property $route
 * @property $user_id
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property ContractEstate $contractEstate
 * @property Document $document
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ContractEstateDocument extends Model
{
    
    static $rules = [
		'document_id' => 'required',
		'contract_estate_id' => 'required',
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
    protected $fillable = ['document_id','contract_estate_id','fileName','route','user_id','isActive'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contractEstate()
    {
        return $this->hasOne('App\Models\ContractEstate', 'id', 'contract_estate_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
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
