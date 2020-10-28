<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lodge extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'short_name'];
}
