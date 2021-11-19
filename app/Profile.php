<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage() {
        $imagePath = ($this->image) ? $this -> image : 'profile/vPyWxTjbH5aR769pvIcA5u6m1WccHDw2cVlR0Ge3.png';
        return '/storage/' . $imagePath;
    }

    public function followers() {
        return $this->belongsToMany(User::Class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
