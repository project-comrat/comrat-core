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

}
