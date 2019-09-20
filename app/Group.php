<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function Employees()
    {
        return $this->hasMany(Employee::class);
    }
}
