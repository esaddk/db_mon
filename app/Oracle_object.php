<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oracle_object extends Model
{
    public function database()
    {
        return $this->belongsTo(Database::class);
    }
}
