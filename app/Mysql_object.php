<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mysql_object extends Model
{
    public function database()
    {
        return $this->belongsTo(Database::class);
    }
}
