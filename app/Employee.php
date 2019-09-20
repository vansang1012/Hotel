<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function Group()
    {
        return $this->belongsTo(Group::class);
    }
}
