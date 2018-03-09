<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EditSuggestion extends Model
{
    protected $fillable = ['type','edit_description'];

     /**
     * Get the user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
