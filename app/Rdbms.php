<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdbms extends Model
{
    protected $fillable = ['name', 'code', 'version', 'ip_server'];
}
