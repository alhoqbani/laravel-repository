<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
