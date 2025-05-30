<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function country() { return $this->belongsTo(Country::class); }
    public function departments() { return $this->hasMany(Department::class); }
    
}
