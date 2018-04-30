<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['price','area','dorms','suite','bathrooms','rooms', 'garage', 'description', 'property_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'details';
}
