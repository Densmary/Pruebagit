<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Activity
 *
 * @property $id
 * @property $date
 * @property $id_tests
 * @property $id_excersices
 * @property $id_mediafiles
 * @property $id_calendars
 * @property $created_at
 * @property $updated_at
 *
 * @property Calendar $calendar
 * @property Excersice $excersice
 * @property Mediafile $mediafile
 * @property Subscription[] $subscriptions
 * @property Test $test
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Activity extends Model
{
    
    static $rules = [
		'date' => 'required',
		'id_tests' => 'required',
		'id_excersices' => 'required',
		'id_mediafiles' => 'required',
		'id_calendars' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date','id_tests','id_excersices','id_mediafiles','id_calendars'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function calendar()
    {
        return $this->hasOne('App\Models\Calendar', 'id', 'id_calendars');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function excersice()
    {
        return $this->hasOne('App\Models\Excersice', 'id', 'id_excersices');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mediafile()
    {
        return $this->hasOne('App\Models\Mediafile', 'id', 'id_mediafiles');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('App\Models\Subscription', 'id_activities', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function test()
    {
        return $this->hasOne('App\Models\Test', 'id', 'id_tests');
    }
    

}
