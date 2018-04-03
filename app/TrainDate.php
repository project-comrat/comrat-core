<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 *  Represents a day that a particular train is available
 *  eg : "Muthu Manike" is available on "SUNDAY"
 */

class TrainDate extends Model
{
    protected $fillable = ['record'];

    /**
     * Get the train of the record.
     */
    public function train()
    {
        return $this->hasOne('App\Train');
    }
}
