<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    protected $guarded = []; //Turn off in-built laravel protetection

    public function user() {
        return $this->belongsTo(User::class);
    }
}
