<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *  Represents a train
 *  eg : "Muthu Manike" is a train
 */

class Train extends Model
{
    protected $fillable = ['number','name','type','remarks','frequency'];

    /**
     * Get the records belong to the table.
     */
    public function records()
    {
        return $this->hasMany('App\Record');
    }

    /**
     * Get available classes.
     */
    public function classes()
    {
        return $this->belongsToMany('App\FairClass');
    }

    /**
     * Get the records belong to the train.
     */
    public function trainDates()
    {
        return $this->hasMany('App\TrainDate');
    }
}
