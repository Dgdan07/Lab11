<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function department() { return $this->belongsTo(Department::class); }
    public function job() { return $this->belongsTo(Job::class); }
    public function manager() { return $this->belongsTo(Employee::class, 'manager_id'); }
    public function subordinates() { return $this->hasMany(Employee::class, 'manager_id'); }
    public function dependents() { return $this->hasMany(Dependent::class); }

}
