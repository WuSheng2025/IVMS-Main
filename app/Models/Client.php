<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    
    protected $table = 'clients';
    protected $primaryKey = 'ChildCode';
    public $incrementing = false; // Assuming ChildCode is not an auto-increment field

    public function visits()
    {
        return $this->hasMany(Visit::class, 'ChildCode', 'ChildCode');
    }
}
