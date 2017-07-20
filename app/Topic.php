<?php

namespace App;

use App\Traits\HasLive;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasLive;
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
