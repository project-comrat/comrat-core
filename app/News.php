<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['headline','description', 'priority'];
     /**
     * Get the user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     /**
     * Get the Locomotive
     */
    public function locomotive()
    {
        return $this->belongsTo('App\Locomotive');
    }



}