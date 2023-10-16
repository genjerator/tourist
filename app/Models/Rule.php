<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    // ...

    public function challenge()
    {
        return $this->belongsTo(Challenge::class, 'challenge_id');
    }
}
