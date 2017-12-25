<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = ['id'];
    // I will explain this later

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
