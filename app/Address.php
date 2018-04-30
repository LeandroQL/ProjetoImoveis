<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['zip','city','state','district','number','complement', 'property_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'addresses';
}
