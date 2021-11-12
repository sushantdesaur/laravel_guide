<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage() {
        $imagePath = ($this->image) ? $this -> image : 'profile/KUGQgq3Ker7IhgvPaONYCmr7Edu0qrwyFX78Z9KL.jpg';
        return '/storage/' . $imagePath;
    }

    public function followers() {
        return $this->belongsToMany(User::Class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
