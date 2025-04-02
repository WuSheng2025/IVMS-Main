<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concatenate extends Model
{
    protected $fillable = ['first_name', 'middle_name','last_name'];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->middle_name} {$this->last_name}";
    }
}
