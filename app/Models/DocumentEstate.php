<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentEstate
 *
 * @property $id
 * @property $estate_id
 * @property $document_id
 * @property $fileName
 * @property $route
 * @property $user_id
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property Document $document
 * @property Estate $estate
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DocumentEstate extends Model
{
    
    static $rules = [
		'estate_id' => 'required',
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
    protected $fillable = ['estate_id','document_id','fileName','route','user_id','isActive'];


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
