<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Excersice
 *
 * @property $id
 * @property $type
 * @property $quiantity
 * @property $created_at
 * @property $updated_at
 *
 * @property Activity[] $activities
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Excersice extends Model
{
    
    static $rules = [
		'type' => 'required',
		'quiantity' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type','quiantity'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'id_excersices', 'id');
    }
    

}
