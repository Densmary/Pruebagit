<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table= 'media_files' ;
    protected $fillablefillable= [
    'id','name','genre','archive','type'
    ];
    public function activities()
    {
        return $this->belongsToMany(activities::class);
    }
}
