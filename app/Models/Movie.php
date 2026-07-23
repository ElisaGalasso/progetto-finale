<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function genre()
    {
        return $this->belongsTo (genre::class);
    }

    public function director()
    {
        return $this->belongsTo(director::class);
    }
}
