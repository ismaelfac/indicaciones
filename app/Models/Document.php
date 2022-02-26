<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Document
 *
 * @property $id
 * @property $title
 * @property $category
 * @property $user_id
 * @property $isActive
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Document extends Model
{
    
    static $rules = [
		'title' => 'required',
		'category' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','category','user_id','isActive'];

    public function contractDocuments()
    {
        return $this->hasMany('App\Models\ContractDocument', 'document_id', 'id');
    }

    public function contractEstateDocuments()
    {
        return $this->hasMany('App\Models\ContractEstateDocument', 'document_id', 'id');
    }

    public function contractPersonDocuments()
    {
        return $this->hasMany('App\Models\ContractPersonDocument', 'document_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
