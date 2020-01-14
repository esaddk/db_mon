<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    public function rdbms()
    {
        return $this->belongsTo(Rdbms::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    protected $fillable = ['user_id', 'rdbms_id', 'application_id', 'database_name', 'size_alocation', 'description'];
}
