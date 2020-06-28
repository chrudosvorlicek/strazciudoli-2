<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clan extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'user_id', 'description'];
}
