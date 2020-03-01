<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Model relationship
    public function user() {
        return $this->belongsTo('App\User');
    }
}
