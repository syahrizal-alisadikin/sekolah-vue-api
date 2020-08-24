<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //mass assignment all field
    protected $guarded = [];

    // BelongsTo Model Category (memanggil Category)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // belongsToMany model Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //change default date view
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y');
    }
}
