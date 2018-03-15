<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FairClass extends Model
{
    protected $fillable = ['name'];

    /**
    * Get trains where the class is available.
    */
    public function trains()
    {
        return $this->belongsToMany('App\Train');
    }

}
