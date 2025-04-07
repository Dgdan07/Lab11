<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function region() { return $this->belongsTo(Region::class); }
    public function locations() { return $this->hasMany(Location::class); }
    
}
