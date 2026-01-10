<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $fillable = ['title', 'slug', 'status'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'post_tag_id', 'id');
    }

    public static function getAllPostTags()
    {
        return PostTag::orderBy('id', 'DESC')->paginate(10);
    }
}
