<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locomotive extends Model
{
    protected $fillable = ['class'];

     /**
     * Get the news belong to the locomotive.
     */
    public function news()
    {
        return $this->hasMany('App\News');
    }
}
