<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['title','type', 'user_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'properties';
}

