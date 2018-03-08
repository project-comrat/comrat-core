<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = ['arrival','departure'];

    /**
     * Get the train.
     */
    public function train()
    {
        return $this->belongsTo('App\Train');
    }

    /**
     * Get the Station.
     */
    public function station()
    {
        return $this->belongsTo('App\Station');
    }
}
