<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postgre_object extends Model
{
    public function database()
    {
        return $this->belongsTo(Database::class);
    }
}
