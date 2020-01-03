<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Database_size extends Model
{
    public function database()
    {
        return $this->belongsTo(Database::class);
    }
}
