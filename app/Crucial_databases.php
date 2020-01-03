<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crucial_databases extends Model
{
    public function database()
    {
        return $this->belongsTo(Database::class);
    }
}
