<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pay
 *
 * @property $id
 * @property $payment
 * @property $credit_card_number
 * @property $type_pay
 * @property $created_at
 * @property $updated_at
 *
 * @property Subscription[] $subscriptions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pay extends Model
{
    
    static $rules = [
		'payment' => 'required',
		'credit_card_number' => 'required',
		'type_pay' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['payment','credit_card_number','type_pay'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('App\Models\Subscription', 'id_pays', 'id');
    }
    

}
