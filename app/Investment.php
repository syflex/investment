<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User');
    }
}
