<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mediafile
 *
 * @property $id
 * @property $name
 * @property $genre
 * @property $archive
 * @property $type
 * @property $created_at
 * @property $updated_at
 *
 * @property Activity[] $activities
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mediafile extends Model
{
    
    static $rules = [
		'name' => 'required',
		'genre' => 'required',
		'archive' => 'required',
		'type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','genre','archive','type'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'id_mediafiles', 'id');
    }
    

}
