<?php

namespace App;

use App\User;
use App\Rdbms;
use Illuminate\Database\Eloquent\Model;

class Availbility extends Model
{
    public function rdbms()
    {
        return $this->belongsTo(Rdbms::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['user_id', 'rdbms_id', 'count_percent', 'status'];
}
