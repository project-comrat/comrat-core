<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = ['name','location','code','type'];

    /**
     * Get records belong to the station.
     */
    public function records()
    {
        return $this->hasMany('App\Record');
    }
}
