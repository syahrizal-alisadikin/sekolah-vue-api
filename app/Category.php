<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //mass assignment all field
    protected $guarded = [];

    public function post()
    {
        // Relasi One to Many Category dengan Post
        return $this->hasMany(Post::class);
    }
}
