<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function owner()
    {
        return $this->belongsTo('App\User', 'owner');
    }

}
