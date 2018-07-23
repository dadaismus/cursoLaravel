<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSocialAccount extends Model
{
    public function socialAccount(){
        return $this->belongsTo(User::class);
    }
}
