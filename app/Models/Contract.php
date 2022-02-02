<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contract
 *
 * @property $id
 * @property $contractNum
 * @property $asegurable
 * @property $domus
 * @property $cannonLease
 * @property $adminValue
 * @property $increment
 * @property $contractRights
 * @property $deliveryDate
 * @property $gracePeriod
 * @property $clause
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contract extends Model
{
    
    static $rules = [
		'contractNum' => 'required',
		'asegurable' => 'required',
		'domus' => 'required',
		'cannonLease' => 'required',
		'adminValue' => 'required',
		'increment' => 'required',
		'contractRights' => 'required',
		'deliveryDate' => 'required',
		'gracePeriod' => 'required',
		'clause' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['contractNum','asegurable','domus','cannonLease','adminValue','increment','contractRights','deliveryDate','gracePeriod','clause'];



}
