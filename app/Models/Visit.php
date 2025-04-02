<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Visit extends Model
{
    
    protected $table = 'visits';

    public function client()
    {
        return $this->belongsTo(Client::class, 'ChildCode', 'ChildCode');
    }
}
